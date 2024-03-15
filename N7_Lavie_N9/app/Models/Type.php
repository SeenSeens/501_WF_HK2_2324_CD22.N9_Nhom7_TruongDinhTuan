<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Type extends Model {
    use HasFactory, Sluggable;
    protected $fillable = [ 'name', 'slug'];
    public function categories() : BelongsToMany
    {
        return $this->belongsToMany(Category::class, 'type_category','cat_id', 'id');
    }
    public function sluggable(): array {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
    public function scopeSearch($query, $value){
        $query->where('name','like',"%{$value}%")->orWhere('slug','like',"%{$value}%");
    }

}
