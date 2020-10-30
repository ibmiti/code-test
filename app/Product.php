<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Product extends Model
{
    public function images(){
        return $this->hasMany(Image::class);
    }
}
 