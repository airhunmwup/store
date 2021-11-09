<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use App\Models\Categories;
use App\Models\Subcategories;
use App\Models\ProductImages;
use App\Models\Vehicles;
use App\Models\Properties;
use Intervention\Image\Facades\Image;

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
        
        $images = $request->file('images');
        if ($request->hasFile('images')) {
            foreach ($images as $image) {
                $filename = "uploads";
                $imagePath = Storage::disk('images')->put($filename, $image);
                //$image = Image::make(public_path("images/{$imagePath}"))->fit(600,600);
                //$image->save();
                ProductImages::create([
                    'product_image_path' => $imagePath,
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
        return Products::where('id', $id)->with('product_images')->with('user')->get();
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
        return Products::where('product_userid', $userid)->with('product_images')->get();
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
                ->orWhere('product_catname', 'LIKE', '%' . $keyword . '%')->with('product_images')
                ->get();
            array_push($data, $results);
        }
        $data = array_unique($data);
        return $data;
    }
    public function similarItems(Request $request)
    {
        $pid = $request->pid;
        $catid = $request->cat_id;
        $subcatid = $request->subcat_id;
        return Products::where('id', '!=' , $pid)
                ->where(function($q) use ($catid,$subcatid) {
                $q->where('product_cat_id', $catid)
                ->orWhere('product_subcat_id', $subcatid);
                })->with('product_images')->take(10)              
                ->get();
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
        return Products::where($name, 'like', '%' . 'product_name' . '%')->with('product_images')->get();
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
    public function getListingBySeller($id)
    {
        //
        $products = Products::where('product_userid', $id)->with('product_images')->orderBy('id', 'desc')->get();
        $properties = Properties::where('product_userid', $id)->with('property_images')->orderBy('id', 'desc')->get();
        $vehicles = Vehicles::where('product_userid', $id)->with('vehicle_images')->orderBy('id', 'desc')->get();
        return $response = [
            'products' => $products,
            'properties' => $properties,
            'vehicles' => $vehicles
        ];
    }
    public function newlists($id)
    {
        //
        return Products::where('product_cat_id', $id)->with('product_images')->orderBy('id', 'desc')->get();
    }
    public function sortLists(Request $request)
    { 
        $data = $request->sort;
        $userid = $request->user()->id;
        if ($data == 1){
        $date = Carbon::now()->subDays(30);
        $orders = Products::where('product_userid','=',$userid)->where('created_at', '>=', $date)->with('product_images')->get();
        }
        if ($data == 2){
        $date = Carbon::now()->subDays(90);
        $orders = Products::where('product_userid','=',$userid)->where('created_at', '>=', $date)->with('product_images')->get();
        }
        if ($data == 3){
        $orders = Products::where('product_userid','=',$userid)->whereBetween('created_at', [
        Carbon::now()->startOfYear(),
        Carbon::now()->endOfYear(),
        ])->with('product_images')->get();        
        }
        if ($data == 4){
        $orders = Products::where('product_userid','=',$userid)->where('created_at','>', Carbon::now()->year-1)->with('product_images')->get();        
        }
        if ($data == 5){
        $orders = Products::where('product_userid','=',$userid)->where('created_at','>', Carbon::now()->year-2)->with('product_images')->get();        
        }
        return $orders;
        
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
