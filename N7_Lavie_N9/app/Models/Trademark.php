<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Trademark extends Model
{
    use HasFactory, Sluggable;
    protected $fillable = [ 'name', 'slug' ];

    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class);
    }
    public function sluggable(): array {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
    public function scopeSearch($query, $value){
        $query->where('name','like',"%{$value}%");
    }
}
