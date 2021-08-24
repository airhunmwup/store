<?php

namespace App\Http\Controllers;

use App\Models\Addressforbuyers;
use Illuminate\Http\Request;

class AddressbuyersController extends Controller
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
    public function store(Request $request)
    {
        //
        $fields = $request->validate([
            'fullname' => 'required|string',
            'phonenumber' => 'required|string',
            'postal_code' => 'required|string',
            'address_line1' => 'required|string',
            'address_line2' => 'string|nullable',
            'town_city' => 'required|string',
        ]);

        $address = Addressforbuyers::create([
            'user_id' => $request->user_id,
            'country' => $request->country,
            'fullname' => $fields['fullname'],
            'phonenumber' => $fields['phonenumber'],
            'postal_code' => $fields['postal_code'],
            'address_line1' => $fields['address_line1'],
            'address_line2' => $fields['address_line2'],
            'town_city' => $fields['town_city'],
            'county' => $request->county,
            'delivery_instruction' => $request->delivery_instruction,
            'securitycode_callboxnumber' => $request->securitycode

        ]);

        $response = [
            'address' => $address 
        ];

        return response($response, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($user_id)
    {
        //
        return Addressforbuyers::where('user_id', $user_id)->get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
        return Addressforbuyers::where('id', $request->id)->delete();
    }
}
