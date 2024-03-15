<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class OrderDetail extends Model
{
    use HasFactory;
    public function user() {
        return $this->belongsTo(User::class);
    }
    public function product()
    {
        return $this->belongsTo(Product::class);
    }


    public function bill(): BelongsTo
    {
        return $this->belongsTo(Bill::class);
    }

    // Has a many-to-many relationship with Product
    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class);
    }

    // Belongs to Status
    public function status(): BelongsTo
    {
        return $this->belongsTo(Status::class);
    }
}
