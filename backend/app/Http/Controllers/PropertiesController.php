<?php

namespace App\Http\Controllers;

use App\Models\Properties;
use App\Models\PropertyImages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;

class PropertiesController extends Controller
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
        $fields = $request->validate([
            'product_subcat' => 'required|string',
            'product_catname' => 'required|string',
            'product_cat_id' => 'required|integer',
            'product_subcat_id' => 'required|integer',
            'property_name' => 'required|string',
            'property_price' => 'required|string',
            'property_type' => 'required|string',
            'property_bedroom_no' => 'required|string',
            'property_bathroom_no' => 'required|string',
            'property_desc' => 'required|string',
        ]);

        $property = Properties::create([
            'product_subcat' => $fields['product_subcat'],
            'product_catname' => $fields['product_catname'],
            'product_cat_id' => $fields['product_cat_id'],
            'product_subcat_id' => $fields['product_subcat_id'],
            'product_userid' => $request->product_userid,
            'property_name' => $fields['property_name'],
            'property_price' => $fields['property_price'],
            'property_type' => $fields['property_type'],
            'property_bedroom_no' => $fields['property_bedroom_no'],
            'property_bathroom_no' => $fields['property_bathroom_no'],
            'property_desc' => $fields['property_desc'],
        ]);
        
        $images = $request->file('images');
        if ($request->hasFile('images')) {
            foreach ($images as $image) {
                $filename = "uploads";
                $imagePath = Storage::disk('images')->put($filename, $image);
                //$image = Image::make(public_path("images/{$imagePath}"))->fit(600,600);
                //$image->save();
                PropertyImages::create([
                    'product_image_path' => $imagePath,
                    'product_id' => $property->id,
                ]);
            }
        }
        return $property;
    }
    public function newproperties()
    {
        //
        return Properties::with('property_images')->orderBy('id', 'desc')->take(6)->get();
    }
    public function properties()
    {
        //
        return Properties::with('property_images')->orderBy('id', 'desc')->get();
    }
    public function sortProperties(Request $request)
    { 
        $data = $request->sort;
        $userid = $request->user()->id;
        if ($data == 1){
        $date = Carbon::now()->subDays(30);
        $orders = Properties::where('product_userid','=',$userid)->where('created_at', '>=', $date)->with('property_images')->get();
        }
        if ($data == 2){
        $date = Carbon::now()->subDays(90);
        $orders = Properties::where('product_userid','=',$userid)->where('created_at', '>=', $date)->with('property_images')->get();
        }
        if ($data == 3){
        $orders = Properties::where('product_userid','=',$userid)->whereBetween('created_at', [
        Carbon::now()->startOfYear(),
        Carbon::now()->endOfYear(),
        ])->with('property_images')->get();        
        }
        if ($data == 4){
        $orders = Properties::where('product_userid','=',$userid)->where('created_at','>', Carbon::now()->year-1)->with('property_images')->get();        
        }
        if ($data == 5){
        $orders = Properties::where('product_userid','=',$userid)->where('created_at','>', Carbon::now()->year-2)->with('property_images')->get();        
        }
        return $orders;
        
    }
    public function filterProperties(Request $request)
    { 
        $min_price = $request->min_price;
        $max_price = $request->max_price;
        $type = $request->type;
        $bedroom = $request->bedroom;
        $bathroom = $request->bathroom;
        $userid = $request->user()->id;
        
        $query = Properties::where('product_userid','=',$userid);
        if ($type){
            $query->where('property_type','=',$type );
        }
        if ($bedroom){
            $query->where('property_bedroom_no','=',$bedroom );
        }
        if ($bathroom){
            $query->where('property_bathroom_no','=',$bathroom );
        }
        if ($min_price && $max_price){
            $query->whereBetween('property_price', [$min_price,$max_price,]);
        }
        $properties = $query->with('property_images')->get();
        
        return $properties;
        
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Properties  $properties
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return Properties::where('id', $id)->with('property_images')->with('user')->get();
    }
    public function getmyproperties($userid)
    {
        //
        return Properties::where('product_userid', $userid)->with('property_images')->get();
    }
    public function similarItems(Request $request)
    {
        $pid = $request->pid;
        $catid = $request->cat_id;
        $subcatid = $request->subcat_id;
        return Properties::where('id', '!=' , $pid)
                ->where(function($q) use ($catid,$subcatid) {
                $q->where('product_cat_id', $catid)
                ->orWhere('product_subcat_id', $subcatid);
                })->with('property_images')->take(10)              
                ->get();
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Properties  $properties
     * @return \Illuminate\Http\Response
     */
    public function edit(Properties $properties)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Properties  $properties
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Properties $properties)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Properties  $properties
     * @return \Illuminate\Http\Response
     */
    public function destroy(Properties $properties)
    {
        //
    }
}
