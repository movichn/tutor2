<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    //protected $table = 'custom_products';
    protected $fillable = ['title', 'description', 'price', 'availability'];
}
