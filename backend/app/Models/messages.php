<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class messages extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'sender_id',
        'sender_name',
        'reciever_id',
        'message',
    ];
}
