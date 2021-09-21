<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImages extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_image_path',
        'product_id'
    ];
    
    public function products()
    {
        return $this->belongsTo('App\Models\Products','product_id');
    }
}

