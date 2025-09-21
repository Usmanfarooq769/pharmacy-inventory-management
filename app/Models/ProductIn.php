<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductIn extends Model
{
   protected $fillable = ['product_id','supplier_id','qty', 'price','date_in'];

    protected $hidden = ['created_at','updated_at'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }

    // Scopes
    public function scopeByDateRange($query, $startDate, $endDate)
    {
        return $query->whereBetween('date_in', [$startDate, $endDate]);
    }

    public function scopeThisMonth($query)
    {
        return $query->whereMonth('date_in', now()->month)
                    ->whereYear('date_in', now()->year);
    }

    public function scopeThisYear($query)
    {
        return $query->whereYear('date_in', now()->year);
    }

    // Boot method
    protected static function boot()
    {
        parent::boot();

        // Calculate total cost before saving
        static::saving(function ($model) {
            $model->total_cost = $model->qty * $model->price;
        });

        // Update product stock when purchase is created
        static::created(function ($model) {
            if ($model->product) {
                $model->product->updateStock($model->qty, 'add');
            }
        });

        // Adjust product stock when purchase is updated
        static::updated(function ($model) {
            $originalQty = $model->getOriginal('qty');
            $difference = $model->qty - $originalQty;
            
            if ($difference !== 0 && $model->product) {
                $operation = $difference > 0 ? 'add' : 'subtract';
                $model->product->updateStock(abs($difference), $operation);
            }
        });

        // Reduce product stock when purchase is deleted
        static::deleted(function ($model) {
            if ($model->product) {
                $model->product->updateStock($model->qty, 'subtract');
            }
        });
    }
}
