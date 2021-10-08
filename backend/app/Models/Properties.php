<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Properties extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_subcat',
        'product_catname',
        'product_cat_id',
        'product_subcat_id',
        'product_userid',
        'property_name',
        'property_price',
        'property_type',
        'property_bedroom_no',
        'property_bathroom_no',
        'property_desc',

    ];
    public function property_images()
    {
        return $this->hasMany('App\Models\PropertyImages','product_id');
    }
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'product_userid');
    }
}
