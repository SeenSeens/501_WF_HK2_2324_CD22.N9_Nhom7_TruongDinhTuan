<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Supplier extends Model
{
    use HasFactory;
    protected $fillable = [ 'name' ];

    public function Product(): BelongsToMany {
        return $this->belongsToMany(Product::class);
    }

    public function scopeSearch($query, $value){
        $query->where('name','like',"%{$value}%");
    }
}
