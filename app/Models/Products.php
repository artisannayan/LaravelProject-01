<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Products extends Model
{
   public function images()
   {
    return $this->hasMany(ProductImage::class, 'product_id');
    // return $this->hasOne('App\Models\ProductImage');
   }
}
