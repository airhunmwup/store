<?php

namespace App\Http\Controllers;

use App\Models\Orders2;
use App\Models\OrderItems;
use Illuminate\Http\Request;

class Orders2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function fetch($orderid)
    {
        return Orders2::where('orderid', $orderid)->with('order_items')->get();
    }
    public function store(Request $request)
    {
        $orderid = time();
        $orders = Orders2::create([           
            'orderid' => $orderid,
            'userid' => $request->order_userid,
            'firstname' => $request->order_firstname,
            'lastname' => $request->order_lastname,
            'phone' => $request->order_phone,
            'email' => $request->order_email,
            'notes' => $request->order_notes,
            'address_line1' => $request->address_line1,
            'address_line2' => $request->address_line2,
            'town_city' => $request->town_city,
            'postal_code' => $request->postal_code,
            'shipping' => $request->order_shipping,
            'total' => $request->order_total,
            'country' => $request->country,
            'payment_status' => 'pending',
            'shipment_status' => 'pending',
            
        ]);
        
        foreach (json_decode($request->input('cart'), true) as $item) {
                $order_items = OrderItems::create([           
            'orderid' => $orderid,
            'name' => $item['product_name'],
            'quantity' => $item['qnty'],
            'price' => $item['product_price'],
            'seller_id' => $item['product_userid'],        
            
        ]);
            }
        return $orders;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Orders2  $orders2
     * @return \Illuminate\Http\Response
     */
    public function show(Orders2 $orders2)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Orders2  $orders2
     * @return \Illuminate\Http\Response
     */
    public function edit(Orders2 $orders2)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Orders2  $orders2
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Orders2 $orders2)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Orders2  $orders2
     * @return \Illuminate\Http\Response
     */
    public function destroy(Orders2 $orders2)
    {
        //
    }
}
