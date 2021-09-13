<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user(){
        return $this->belongsTo(UserPayment::class);
    }

    public function products(){
        return $this->belongsToMany(Products::class)
        ->withPivot('quantity');
    }
}
