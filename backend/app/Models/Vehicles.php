<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicles extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_subcat',
        'product_catname',
        'product_cat_id',
        'product_subcat_id',
        'product_userid',
        'vehicle_make',
        'vehicle_model',
        'vehicle_year',
        'vehicle_owner_no',
        'vehicle_price',
        'vehicle_desc',

    ];
    public function vehicle_images()
    {
        return $this->hasMany('App\Models\ProductImages','product_id');
    }
}
