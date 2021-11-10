<?php

namespace App\Http\Controllers;

use App\Models\Vehicles;
use App\Models\VehicleImages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;

class VehiclesController extends Controller
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
            'vehicle_make' => 'required|string',
            'vehicle_model' => 'required|string',
            'vehicle_year' => 'required|integer',
            'vehicle_owner_no' => 'required|string',
            'vehicle_price' => 'required|string',
            'vehicle_millage' => 'required|string',
            'vehicle_engine_type' => 'required|string',
            'vehicle_fuel_type' => 'required|string',
            'vehicle_engine_size' => 'required|string',
            'vehicle_desc' => 'required|string',
        ]);

        $vehicle = Vehicles::create([
            'product_subcat' => $fields['product_subcat'],
            'product_catname' => $fields['product_catname'],
            'product_cat_id' => $fields['product_cat_id'],
            'product_subcat_id' => $fields['product_subcat_id'],
            'product_userid' => $request->product_userid,
            'vehicle_make' => $fields['vehicle_make'],
            'vehicle_model' => $fields['vehicle_model'],
            'vehicle_year' => $fields['vehicle_year'],
            'vehicle_owner_no' => $fields['vehicle_owner_no'],
            'vehicle_price' => $fields['vehicle_price'],
            'vehicle_millage' => $fields['vehicle_millage'],
            'vehicle_enginetype' => $fields['vehicle_engine_type'],
            'vehicle_fueltype' => $fields['vehicle_fuel_type'],
            'vehicle_enginesize' => $fields['vehicle_engine_size'],
            'vehicle_desc' => $fields['vehicle_desc'],
        ]);
        
        $images = $request->file('images');
        if ($request->hasFile('images')) {
            foreach ($images as $image) {
                $filename = "uploads";
                $imagePath = Storage::disk('images')->put($filename, $image);
                //$image = Image::make(public_path("images/{$imagePath}"))->fit(600,600);
                //$image->save();
                VehicleImages::create([
                    'product_image_path' => $imagePath,
                    'product_id' => $vehicle->id,
                ]);
            }
        }
        return $vehicle;
    }
    public function newvehicles()
    {
        //
        return Vehicles::with('vehicle_images')->orderBy('id', 'desc')->take(6)->get();
    }
    public function vehicles()
    {
        //
        return Vehicles::with('vehicle_images')->orderBy('id', 'desc')->get();
    }
     public function sortVehicles(Request $request)
    { 
        $data = $request->sort;
        $userid = $request->user()->id;
        if ($data == 1){
        $date = Carbon::now()->subDays(30);
        $orders = Vehicles::where('product_userid','=',$userid)->where('created_at', '>=', $date)->with('vehicle_images')->get();
        }
        if ($data == 2){
        $date = Carbon::now()->subDays(90);
        $orders = Vehicles::where('product_userid','=',$userid)->where('created_at', '>=', $date)->with('vehicle_images')->get();
        }
        if ($data == 3){
        $orders = Vehicles::where('product_userid','=',$userid)->whereBetween('created_at', [
        Carbon::now()->startOfYear(),
        Carbon::now()->endOfYear(),
        ])->with('vehicle_images')->get();        
        }
        if ($data == 4){
        $orders = Vehicles::where('product_userid','=',$userid)->where('created_at','>', Carbon::now()->year-1)->with('vehicle_images')->get();        
        }
        if ($data == 5){
        $orders = Vehicles::where('product_userid','=',$userid)->where('created_at','>', Carbon::now()->year-2)->with('vehicle_images')->get();        
        }
        return $orders;
        
    }
    public function filterVehicles(Request $request)
    { 
        $min_price = $request->min_price;
        $max_price = $request->max_price;
        $min_year = $request->min_year;
        $max_year = $request->max_year;
        $engine_type = $request->engine_type;
        $owners = $request->owners;
        $userid = $request->user()->id;
        
        $query = Vehicles::where('product_userid','=',$userid);
        if ($owners){
            $query->where('vehicle_owner_no','=',$owners );
        }
        if ($engine_type){
            $query->where('vehicle_enginetype','=',$engine_type );
        }
        if ($max_year && $min_year){
            $query->whereBetween('vehicle_year', [$min_year,$max_year,]);
        }
        if ($min_price && $max_price){
            $query->whereBetween('vehicle_price', [$min_price,$max_price,]);
        }
        $vehicles = $query->with('vehicle_images')->get();
        
        return $vehicles;
        
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vehicles  $vehicles
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return Vehicles::where('id', $id)->with('vehicle_images')->with('user')->get();
    }
    public function getmyvehicles($userid)
    {
        //
        return Vehicles::where('product_userid', $userid)->with('vehicle_images')->get();
    }
    public function similarItems(Request $request)
    {
        $pid = $request->pid;
        $catid = $request->cat_id;
        $subcatid = $request->subcat_id;
        return Vehicles::where('id', '!=' , $pid)
                ->where(function($q) use ($catid,$subcatid) {
                $q->where('product_cat_id', $catid)
                ->orWhere('product_subcat_id', $subcatid);
                })->with('vehicle_images')->take(10)              
                ->get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vehicles  $vehicles
     * @return \Illuminate\Http\Response
     */
    public function edit(Vehicles $vehicles)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vehicles  $vehicles
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vehicles $vehicles)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vehicles  $vehicles
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vehicles $vehicles)
    {
        //
    }
}
