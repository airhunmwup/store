<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name',
        'product_image1',
        'product_image2',
        'product_image3',
        'product_image4',
        'product_image5',
        'product_price',
        'product_condition',
        'product_brand',
        'product_location',

    ];
}
