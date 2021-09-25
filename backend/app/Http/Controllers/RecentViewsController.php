<?php

namespace App\Http\Controllers;

use App\Models\recentViews;
use Illuminate\Http\Request;

class RecentViewsController extends Controller
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
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $recentView = recentViews::create([
            'product_id' => $request->product_id,
            'userid' => $request->user_id,
        ]);
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
