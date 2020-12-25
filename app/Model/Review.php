<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    public function product()
    {
        // 1 review id must has 1 product
        return $this->belongsTo(Product::class);
    }
}
