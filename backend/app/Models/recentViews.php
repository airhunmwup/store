<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class recentViews extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'product_id',
        'userid',
    ];
    public function products()
    {
        return $this->belongsTo('App\Models\Products','product_id');
    }
}
