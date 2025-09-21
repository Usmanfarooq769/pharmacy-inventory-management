<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['category_id','nama','price','image','qty'];

    protected $hidden = ['created_at','updated_at'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

     public function productIns()
    {
        return $this->hasMany(ProductIn::class);
    }

    public function productOutItems()
    {
        return $this->hasMany(ProductOutItem::class);
    }

    // Accessors
    public function getTotalPurchasedAttribute()
    {
        return $this->productIns->sum('qty');
    }

    public function getTotalSoldAttribute()
    {
        return $this->productOutItems->sum('qty');
    }

    public function getCurrentStockAttribute()
    {
        return $this->total_purchased - $this->total_sold;
    }

    public function getIsLowStockAttribute()
    {
        return $this->current_stock <= ($this->min_stock ?? 10);
    }

    // Scopes
    public function scopeActive($query)
    {
        return $query->where('status', true);
    }

    public function scopeLowStock($query)
    {
        return $query->whereRaw('qty <= COALESCE(min_stock, 10)');
    }

    public function scopeByCategory($query, $categoryId)
    {
        return $query->where('category_id', $categoryId);
    }

    // Methods
    public function updateStock($quantity, $operation = 'subtract')
    {
        if ($operation === 'add') {
            $this->qty += $quantity;
        } else {
            $this->qty = max(0, $this->qty - $quantity); // Prevent negative stock
        }
        
        return $this->save();
    }
}
