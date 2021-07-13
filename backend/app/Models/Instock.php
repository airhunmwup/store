<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instock extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'available_product_id',
        'available_product_name',
        'available_product_quantity'
    ];
}
