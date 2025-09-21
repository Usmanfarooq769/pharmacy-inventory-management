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


     public function getFormattedDateAttribute()
    {
        return $this->date_out->format('M d, Y');
    }
    // Scopes
    public function scopeByDateRange($query, $startDate, $endDate)
    {
        return $query->whereBetween('date_out', [$startDate, $endDate]);
    }

    public function scopeThisMonth($query)
    {
        return $query->whereMonth('date_out', now()->month)
                    ->whereYear('date_out', now()->year);
    }

    public function scopeThisYear($query)
    {
        return $query->whereYear('date_out', now()->year);
    }

    public function scopeCompleted($query)
    {
        return $query->where('status', 'completed');
    }

    public function scopePending($query)
    {
        return $query->where('status', 'pending');
    }




}
