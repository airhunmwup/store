<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Addressforbuyers extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'country',
        'fullname',
        'phonenumber',
        'postal_code',
        'address_line1',
        'address_line2',
        'town_city',
        'county',
        'delivery_instruction',
        'securitycode_callboxnumber'
    ];
}
