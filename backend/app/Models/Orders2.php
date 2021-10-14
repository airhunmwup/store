<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders2 extends Model
{
    use HasFactory;
    protected $fillable = [
        'orderid',
        'userid',
        'firstname',
        'lastname',
        'phone',
        'email',
        'notes',
        'address_line1',
        'address_line2',
        'town_city',
        'postal_code',
        'shipping',
        'total',
        'country',
        'payment_status',
        'shipment_status',
    ];
    public function order_items()
    {
        return $this->hasMany('App\Models\OrderItems', 'orderid', 'orderid');
    }
}
