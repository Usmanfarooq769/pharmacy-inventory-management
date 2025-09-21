<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductOut extends Model
{
     protected $fillable = ['customer_id','date_out','total_amount', 'notes'];


    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

     protected $casts = [
        'date_out' => 'date',
        'total_amount' => 'decimal:2',
    ];


    /**
     * Relationship with ProductOutItems (child table)
     */
    public function items()
    {
        return $this->hasMany(ProductOutItem::class);
    }

    /**
     * Calculate total quantity across all items
     */
    public function getTotalQuantityAttribute()
    {
        return $this->items->sum('qty');
    }

    /**
     * Calculate total amount across all items
     */
    public function getTotalAmountAttribute()
    {
        return $this->items->sum('total_price');
    }

    /**
     * Get count of different products
     */
    public function getProductCountAttribute()
    {
        return $this->items->count();
    }

    /**
     * Boot method to handle model events
     */
    protected static function boot()
    {
        parent::boot();

        // When deleting ProductOut, also delete its items
        static::deleting(function ($model) {
            $model->items()->delete();
        });
    }

}
