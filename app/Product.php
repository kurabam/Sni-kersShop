<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'body',
        'price',
        'picture',
        'picture_small',
        'user_id',
        'category_id'
    ];
    //
}
