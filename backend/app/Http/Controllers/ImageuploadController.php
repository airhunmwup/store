<?php

namespace App\Http\Controllers;

use Image;
use App\Models\Imageupload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class ImageuploadController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $images = array();
        $path = public_path('storage/images/');
        $files = File::allFiles($path);

        foreach ($files as $key => $file) {
            // loop through all images...
            $img = array_push($images, $path . $file);
        }
    
        return $img;
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
        $imageLength = count($request->all());
        $image = new Imageupload;
        

        //Save image to disk
        if($request->hasFile('product_image1') ){
            for($i = 1; $i <= $imageLength; $i++){
                $randomNumber = random_int(100000, 999999);
                $file = $request->file('product_image' . $i);
                $name = "product_image" . $i;
                $resize = Image::make($file)->resize(600, 600, function ($constraint) {
                    $constraint->aspectRatio();
                  })->encode('jpg');
                
                  $filename = Carbon::now()->toDateString().$randomNumber.'.'.$file->getClientOriginalExtension();

                Storage::put("public/images/{$filename}", (string) $resize);
                $image->$name  = $filename;
                $image->save();
            }

            $data = [
                'status' => 200,
                'data'   => 'Image upload success'
            ];
        }
        
        return response($data);
    }
}
