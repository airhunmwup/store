<?php

namespace App\Http\Controllers;

use App\Models\recentViews;
use App\Models\Products;
use Illuminate\Http\Request;

class RecentViewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $data = array();
        $recent_views = recentViews::where('userid', $id)->groupBy('product_id')->orderBy('id', 'desc')->take(10)->pluck('product_id')->toArray();
        foreach ($recent_views as $pid) {
            $results = Products::where('id', $pid)->with('product_images')->get();
            
            array_push($data, $results[0]);
        }
        $data = array_unique($data);
        return $data;
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $recent = recentViews::orderBy('id', 'desc')->take(1)->value('product_id');
        $productid = $request->product_id;
        
        if ($recent != $productid){
        $recentView = recentViews::create([
            'product_id' => $request->product_id,
            'userid' => $request->user_id,
        ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\recentViews  $recentViews
     * @return \Illuminate\Http\Response
     */
    public function show(recentViews $recentViews)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\recentViews  $recentViews
     * @return \Illuminate\Http\Response
     */
    public function edit(recentViews $recentViews)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\recentViews  $recentViews
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, recentViews $recentViews)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\recentViews  $recentViews
     * @return \Illuminate\Http\Response
     */
    public function destroy(recentViews $recentViews)
    {
        //
    }
}
