<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Cuisine extends Model
{
    /**
     * Get all of the comments for the Supplier
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function foodItems(): HasMany
    {
        return $this->hasMany(FoodItem::class,);
    }
}
