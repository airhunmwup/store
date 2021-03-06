<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategories extends Model
{
    use HasFactory;

    protected $fillable = [
        'sub_catname',
        'cat_id'
    ];
    
    public function categories()
    {
        return $this->belongsTo('App\Models\Categories', 'cat_id');
    }
}

