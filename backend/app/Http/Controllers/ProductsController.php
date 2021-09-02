<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Products::all();
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
            'product_name' => 'required|string',
            'product_price' => 'required|string',
            'product_desc' => 'required|string',
            'product_shipping_cost' => 'required|string',
            'product_pakage_weight' => 'required|string',
            'product_pakage_sizex' => 'required|string',
            'product_pakage_sizey' => 'required|string',
        ]);

        return Products::create([
            'product_subcat' => $request->product_subcat,
            'product_userid' => $request->product_userid,
            'product_name' => $fields['product_name'],
            'product_condition' => $request->product_condition,
            'product_desc' => $fields['product_desc'],
            'product_price' => $fields['product_price'],
            'product_image1' => $request->product_image1,
            'product_image2' => $request->product_image2,
            'product_image3' => $request->product_image3,
            'product_image4' => $request->product_image4,
            'product_image5' => $request->product_image5,
            'product_shipping_type' => $request->product_shipping_type,
            'product_shipping_rate' => $request->product_shipping_rate,
            'product_shipping_cost' => $fields['product_shipping_cost'],
            'product_package_type' => $request->product_package_type,
            'product_package_weight' => $request->product_package_weight,
            'product_package_sizex' => $request->product_package_sizex,
            'product_package_sizey' => $request->product_package_sizey,
            'product_location' => $request->product->location
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return Products::find($id);
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
        $editProduct = Products::find($id);
        $editProduct->update($request->all());
        return $editProduct;
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
        return Products::destroy($id);
    }

    /**
     * Search the specified resource from storage.
     *
     * @param  str  $name
     * @return \Illuminate\Http\Response
     */
    public function search($name)
    {
        //
        return Products::where($name, 'like', '%'.'product_name'.'%')->get();
    }

    public function newlisting()
    {
        //
        return Products::orderBy('id', 'desc')->take(6)->get();
    }
}
