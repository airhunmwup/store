<?php

namespace App\Http\Controllers;

use App\Models\Subscriptions;
use Illuminate\Http\Request;

class SubscriptionsController extends Controller
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
        $user = $request->user();
        $plan = $request->plan;
        $planID = $request->price_id;
        $payment = $request->payment_method;
        $paymentID = $payment['id'];
        
        if( !$user->subscribed($plan) ){
        $user->newSubscription( $plan, $planID )
                ->create( $paymentID );
    }else{
        $user->subscription($plan)->swap( $planID );
    }
    
    return response()->json([
        'subscription_updated' => true
    ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Subscriptions  $subscriptions
     * @return \Illuminate\Http\Response
     */
    public function show(Subscriptions $subscriptions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Subscriptions  $subscriptions
     * @return \Illuminate\Http\Response
     */
    public function edit(Subscriptions $subscriptions)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Subscriptions  $subscriptions
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subscriptions $subscriptions)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Subscriptions  $subscriptions
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subscriptions $subscriptions)
    {
        //
    }
}
