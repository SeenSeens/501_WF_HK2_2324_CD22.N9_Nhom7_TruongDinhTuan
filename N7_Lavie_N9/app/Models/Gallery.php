<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Gallery extends Model
{
    use HasFactory;
    protected $fillable = [ 'gallery_image' ];
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
    public function setFilenamesAttribute($value)
    {
        $this->attributes['gallery_image'] = json_encode($value);
    }
}
