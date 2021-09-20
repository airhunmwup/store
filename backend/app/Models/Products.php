<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_subcat',
        'product_catname',
        'product_cat_id',
        'product_subcat_id',
        'product_userid',
        'product_name',
        'product_condition',
        'product_desc',
        'product_price',
        'product_quantity',
        'product_image1',
        'product_image2',
        'product_image3',
        'product_image4',
        'product_shipping_type',
        'product_shipping_rate',
        'product_shipping_cost',
        'product_package_type',
        'product_package_weight',
        'product_package_length',
        'product_package_width',
        'product_total',

    ];
    public function product_images()
    {
        return $this->hasMany('App\Models\ProductImages','product_id');
    }
}
