<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imageupload extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_image1',
        'product_image2',
        'product_image3',
        'product_image4',
    ];
}
