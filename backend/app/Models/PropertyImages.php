<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyImages extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_image_path',
        'product_id'
    ];
    
    public function vehicles()
    {
        return $this->belongsTo('App\Models\Properties','product_id');
    }
}
