<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payout extends Model
{
    use HasFactory;
    
        protected $fillable = [
        'account_name',
        'account_number',
        'sort_code',
        'user_id',
        'currency',
        'bank_name',
    ];
}
