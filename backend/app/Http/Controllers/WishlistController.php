<?php

namespace App\Http\Controllers;

use App\Models\Wishlist;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
    
        $wishlist = Wishlist::where('product_name', $request->product_name)->get();

        if($wishlist){
            $response  = [
                'status' => count($wishlist)
            ];
        }elseif(!$wishlist){
            $response  = [
                'status' => 0
            ];
        }

        return response($response, 200);
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
        return Wishlist::create([
            'product_name' => $request->product_name,
            'product_image' => $request->product_image,
            'product_price' => $request->product_price,
            'product_condition' => $request->product_condition,
            'user_id' => $request->user_id,
        ]);

        $response = [
            'status' => "Watchlist added",
        ];

        return response($response, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //
        $wishlist = Wishlist::where('user_id', $request->user_id)->where('product_name', $request->product_name)->get();

        if($wishlist){
            $response = [
                'status' => count($wishlist),
            ];
        }

        return response($response, 200); 
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
    public function destroy($id)
    {
        //
        return Wishlist::destroy($id);
    }

    public function mywishlist($user_id)
    {
        //
        return Wishlist::where('user_id',$user_id)->get();
    }
}
