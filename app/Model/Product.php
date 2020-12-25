<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    public function reviews()
    {
        // 1 product bisa memiliki lebih dari 1 review
        return $this->hasMany(Review::class);
    }
}
