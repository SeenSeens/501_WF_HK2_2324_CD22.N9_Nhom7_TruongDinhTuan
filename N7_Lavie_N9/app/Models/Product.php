<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    use HasFactory, Sluggable;
    protected $fillable = [
        'title',
        'slug',
        'description',
        'thumbnail',
        'price',
        'discount',
        'new',
        'outstanding',
        'trending',
        'hot',
        'bestseller'
    ];
    public function productDetails()
    {
        return $this->hasMany(ProductDetail::class, 'product_id', 'id');
    }


    public function category() : BelongsTo {
        return $this->belongsTo(Category::class);
    }

    public function type() : BelongsTo {
        return $this->belongsTo(Type::class);
    }

    public function gallery(): BelongsTo {
        return $this->belongsTo(Gallery::class);
    }

    // Has a many-to-many relationship with Order
    public function order(): BelongsToMany {
        return $this->belongsToMany(Order::class);
    }

    // Belongs to a Stock
    public function trademark(): BelongsTo {
        return $this->belongsTo(Trademark::class);
    }
    public function sluggable(): array {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
    public function scopeSearch($query, $value){
        $query->where('title','like',"%{$value}%")
            ->orWhere('slug', 'like', "%{$value}%")
            ->orWhere('description', 'like', "%{$value}%")
            ->orWhere('excerpt', 'like', "%{$value}%")
            ->orWhere('price', 'like', "%{$value}%")
            ->orWhere('discount', 'like', "%{$value}%");
    }
}
