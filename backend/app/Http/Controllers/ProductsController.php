<?php

namespace App\Http\Controllers;

use Image;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use App\Models\Categories;
use App\Models\Subcategories;
use App\Models\ProductImages;

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

    public function imageUploader(Request $request)
    {
        $imageCount = count($request->all());
        $image = Products::where('id', $request->id)->first();

        if ($request->hasFile('product_image1')) {
            for ($i = 1; $i <= $imageCount; $i++) {
                $randomNumber = random_int(100000, 999999);
                $file = $request->file('product_image' . $i);
                $name = "product_image" . $i;
                $resize = Image::make($file)->resize(600, 600, function ($constraint) {
                    $constraint->aspectRatio();
                })->encode('jpg');

                $filename = Carbon::now()->toDateString() . $randomNumber . '.' . $file->getClientOriginalExtension();

                Storage::put("public/images/{$filename}", (string) $resize);
                $image->$name  = $filename;
                $image->save();
            }

            $data = [
                'status' => 200,
                'data'   => 'Image upload success'
            ];
            return response($data);
        } else {
            $data = [
                'status' => 422,
                'data'   => 'Invalid Image upload, failure!'
            ];
            return response($data, $data['status']);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $fields = $request->validate([
            'product_subcat' => 'required|string',
            'product_catname' => 'required|string',
            'product_cat_id' => 'required|integer',
            'product_subcat_id' => 'required|integer',
            'product_name' => 'required|string',
            'product_price' => 'required|integer',
            'product_quantity' => 'required|integer',
            'product_condition' => 'required|string',
            'product_desc' => 'required|string',
            'product_shipping_type' => 'required|string',
            'product_shipping_rate' => 'required|string',
            'product_shipping_cost' => 'required|integer',
            'product_package_type' => 'required|string',
            'product_package_weight' => 'required|integer',
            'product_package_length' => 'required|integer',
            'product_package_width' => 'required|integer',
        ]);

        $product = Products::create([
            'product_subcat' => $fields['product_subcat'],
            'product_catname' => $fields['product_catname'],
            'product_cat_id' => $fields['product_cat_id'],
            'product_subcat_id' => $fields['product_subcat_id'],
            'product_userid' => $request->product_userid,
            'product_name' => $fields['product_name'],
            'product_condition' => $fields['product_condition'],
            'product_desc' => $fields['product_desc'],
            'product_price' => $fields['product_price'],
            'product_quantity' => $fields['product_quantity'],
            'product_shipping_type' => $fields['product_shipping_type'],
            'product_shipping_rate' => $fields['product_shipping_rate'],
            'product_shipping_cost' => $fields['product_shipping_cost'],
            'product_package_type' => $fields['product_package_type'],
            'product_package_weight' => $fields['product_package_weight'],
            'product_package_length' => $fields['product_package_length'],
            'product_package_width' => $fields['product_package_width'],
            'product_total' => $request->product_total,
        ]);
        //if ($request->hasFile('testImage')) {
        // $image = $request->file('testImage');
        // $randomNumber = random_int(100000, 999999);
        //$filename = "uploads";
        //$imagePath = $images->store('images','public');
        //$imagePath = Storage::disk('images')->put($filename,$image);
        //return $request;
        //}else{
        // return "none";
        // }
        $images = $request->file('images');
        if ($request->hasFile('images')) {
            foreach ($images as $image) {
                $filename = "uploads";
                //$imagePath = $images->store('images','public');
                $imagePath = Storage::disk('images')->put($filename, $image);
                ProductImages::create([
                    'product_image_path' => '/public/images/' . $imagePath,
                    'product_id' => $product->id,
                ]);
            }
        }
        return $product;
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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getlistings($userid)
    {
        //
        return Products::where('product_userid', $userid)->get();
    }
    public function getlisting($id)
    {
        //
        return Products::where('product_userid', $id)->get();
    }
    public function getResults(Request $request)
    {
        $data = array();
        $strings = preg_replace('#\s+#', ',', trim($request->keywords));
        $array_strings = explode(',', $strings);
        foreach ($array_strings as $keyword) {
            $results = Products::where('product_name', 'LIKE', '%' . $keyword . '%')
                ->orWhere('product_subcat', 'LIKE', '%' . $keyword . '%')
                ->orWhere('product_catname', 'LIKE', '%' . $keyword . '%')
                ->get();
            array_push($data, $results);
        }
        $data = array_unique($data);
        return $data;
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
        return Products::where($name, 'like', '%' . 'product_name' . '%')->get();
    }

    public function newlisting()
    {
        //
        return Products::with('product_images')->orderBy('id', 'desc')->take(6)->get();
    }
    public function newlisting2($id)
    {
        //
        return Products::where('product_subcat_id', $id)->with('product_images')->orderBy('id', 'desc')->get();
    }
    public function newlists($id)
    {
        //
        return Products::where('product_cat_id', $id)->with('product_images')->orderBy('id', 'desc')->get();
    }
    public function sortListings($id)
    {
        if ($id == "0") {
            return Products::with('product_images')->orderBy('id', 'desc')->get();
        } else {
            if ($id == "1") {
                return Products::with('product_images')->orderBy('product_name')->get();
            }
            if ($id == "2") {
                return Products::with('product_images')->orderBy('product_name', 'desc')->get();
            }
            if ($id == "3") {
                return Products::with('product_images')->orderBy('product_price')->get();
            }
            if ($id == "4") {
                return Products::with('product_images')->orderBy('product_price', 'desc')->get();
            }
        }
    }
}
