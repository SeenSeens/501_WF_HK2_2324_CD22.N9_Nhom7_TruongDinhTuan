<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\Product;

class ProductDetail extends Model
{
    use HasFactory;
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }

    public function category() : BelongsTo {
        return $this->belongsTo(Category::class, 'category_id', 'id');
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
    public function stock(): BelongsTo {
        return $this->belongsTo(Stock::class);
    }
}
