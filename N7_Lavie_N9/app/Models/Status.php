<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Status extends Model
{
    use HasFactory;

    /**
     * @var string[]
     */
    protected $fillable = [ 'name' ];

    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }

}
