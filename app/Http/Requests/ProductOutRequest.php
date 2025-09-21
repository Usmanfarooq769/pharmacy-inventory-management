<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductOutRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
     public function rules(): array
    {
        return [
            'customer_id' => 'required|integer|exists:customers,id',
            'date_out' => 'required|date',
            'products' => 'required|array|min:1',
            'products.*.product_id' => [
                'required',
                'integer',
                'exists:products,id',
                function ($attribute, $value, $fail) {
                    // Custom validation to check if product has enough stock
                    $product = Product::find($value);
                    if (!$product) {
                        $fail('The selected product does not exist.');
                        return;
                    }
                    
                    // Get the quantity for this specific product
                    $index = explode('.', $attribute)[1]; // Get array index
                    $quantity = $this->input("products.{$index}.qty");
                    
                    if ($quantity && $quantity > $product->qty) {
                        $fail("Insufficient stock for {$product->nama}. Available: {$product->qty}, Requested: {$quantity}");
                    }
                },
            ],
            'products.*.qty' => [
                'required',
                'integer',
                'min:1',
                'max:9999999', // Set reasonable maximum
            ],
        ];
    }
    public function messages(): array
    {
        return [
            'customer_id.required' => 'Please select a customer.',
            'customer_id.exists' => 'The selected customer does not exist.',
            'date_out.required' => 'Please select a date.',
            'date_out.date' => 'Please enter a valid date.',
            'products.required' => 'At least one product is required.',
            'products.min' => 'At least one product is required.',
            'products.*.product_id.required' => 'Please select a product.',
            'products.*.product_id.exists' => 'The selected product does not exist.',
            'products.*.qty.required' => 'Please enter a quantity.',
            'products.*.qty.integer' => 'Quantity must be a number.',
            'products.*.qty.min' => 'Quantity must be at least 1.',
            'products.*.qty.max' => 'Quantity is too large.',
        ];
    }
     public function attributes(): array
    {
        return [
            'customer_id' => 'customer',
            'date_out' => 'date',
            'products' => 'products',
            'products.*.product_id' => 'product',
            'products.*.qty' => 'quantity',
        ];
    }

    /**
     * Configure the validator instance.
     */
    public function withValidator($validator)
    {
        $validator->after(function ($validator) {
            // Additional validation logic
            $products = $this->input('products', []);
            $productIds = array_column($products, 'product_id');
            
            // Check for duplicate products
            if (count($productIds) !== count(array_unique($productIds))) {
                $validator->errors()->add('products', 'Duplicate products are not allowed. Please combine quantities for the same product.');
            }
            
            // Check if we're updating and validate stock considering current transaction
            if ($this->input('id')) {
                $this->validateUpdateStock($validator);
            }
        });
    }

    /**
     * Validate stock for update operations
     */
    protected function validateUpdateStock($validator)
    {
        try {
            $productOutId = $this->input('id');
            $currentProductOut = \App\Models\ProductOut::with('items')->find($productOutId);
            
            if ($currentProductOut) {
                $products = $this->input('products', []);
                
                foreach ($products as $index => $productData) {
                    $productId = $productData['product_id'];
                    $newQty = (int) $productData['qty'];
                    $product = Product::find($productId);
                    
                    if (!$product) continue;
                    
                    // Find current item for this product (if exists)
                    $currentItem = $currentProductOut->items->where('product_id', $productId)->first();
                    $currentQty = $currentItem ? $currentItem->qty : 0;
                    
                    // Calculate available stock including current transaction
                    $availableStock = $product->qty + $currentQty;
                    
                    if ($newQty > $availableStock) {
                        $validator->errors()->add("products.{$index}.qty", 
                            "Insufficient stock for {$product->nama}. Available: {$availableStock}, Requested: {$newQty}");
                    }
                }
            }
        } catch (\Exception $e) {
            // Log error but don't fail validation
            \Log::warning('Stock validation error during update: ' . $e->getMessage());
        }
    }

    /**
     * Prepare the data for validation.
     */
    protected function prepareForValidation()
    {
        // Clean up products array - remove empty entries
        $products = $this->input('products', []);
        $cleanedProducts = [];
        
        foreach ($products as $product) {
            if (!empty($product['product_id']) && !empty($product['qty'])) {
                $cleanedProducts[] = [
                    'product_id' => (int) $product['product_id'],
                    'qty' => (int) $product['qty']
                ];
            }
        }
        
        $this->merge([
            'products' => $cleanedProducts
        ]);
    }
}
