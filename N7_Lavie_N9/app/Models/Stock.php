<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Stock extends Model
{
    use HasFactory;
    protected $fillable = [
        'address',
        'inventory',
        'product_inventory'
    ];
    public function products(): BelongsTo {
        return $this->belongsTo(Product::class);
    }
    public function scopeSearch($query, $value){
        $query->where('address','like',"%{$value}%")->orWhere('inventory','like',"%{$value}%")->orWhere('product_inventory', 'like', "%{$value}%");
    }
}
