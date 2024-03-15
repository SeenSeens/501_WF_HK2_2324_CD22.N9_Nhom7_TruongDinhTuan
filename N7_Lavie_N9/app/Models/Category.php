<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory, Sluggable;
    protected $fillable = ['name', 'slug', 'description', 'thumbnail', 'parent_id'];

    public function types(): BelongsToMany {
        return $this->belongsToMany(Type::class, 'type_category');
    }

    // Has a many-to-many relationship with Product
    public function products(): BelongsToMany {
        return $this->belongsToMany(Product::class);
    }

    public function sluggable(): array {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
    public function parent() {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    public function children() {
        return $this->hasMany(Category::class, 'parent_id');
    }

    public function scopeSearch($query, $value){
        $query->where('name','like',"%{$value}%")->orWhere('slug','like',"%{$value}%")->orWhere('description', 'like', "%{$value}%");
    }
}

