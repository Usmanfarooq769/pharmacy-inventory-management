<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductOutItem extends Model
{
    use HasFactory;
 protected $fillable = [
        'product_out_id',
        'product_id',
        'qty',
        'unit_price', // Store price at time of transaction
        'total_price' // Calculated field (qty * unit_price)
    ];

    protected $casts = [
        'qty' => 'integer',
        'unit_price' => 'decimal:2',
        'total_price' => 'decimal:2',
    ];

    /**
     * Relationship with ProductOut (parent)
     */
    public function productOut()
    {
        return $this->belongsTo(ProductOut::class);
    }

    /**
     * Relationship with Product
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    protected static function boot()
    {
        parent::boot();

        // Before saving, fetch product price and calculate total
        static::saving(function ($model) {
            // If unit_price is not set, fetch from product
            if (!$model->unit_price && $model->product_id) {
                $product = Product::find($model->product_id);
                if ($product) {
                    $model->unit_price = $product->price;
                }
            }

            // Calculate total price
            if ($model->unit_price && $model->qty) {
                $model->total_price = $model->unit_price * $model->qty;
            }
        });
    }

    /**
     * Get the total price attribute (in case it's not saved in DB)
     */
    public function getTotalPriceAttribute($value)
    {
        // If total_price is already calculated, return it
        if ($value) {
            return $value;
        }

        // Otherwise calculate on the fly
        if ($this->unit_price && $this->qty) {
            return $this->unit_price * $this->qty;
        }

        return 0;
    }

    /**
     * Scope to include price calculations
     */
    public function scopeWithPriceCalculations($query)
    {
        return $query->selectRaw('
            product_out_items.*,
            (unit_price * qty) as calculated_total
        ');
    }
}