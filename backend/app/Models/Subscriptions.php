<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscriptions extends Model
{
    use HasFactory;
    
    protected $casts = [
    'begin' => 'date:hh:mm',
    'end' => 'date:hh:mm',    
    ];
}
