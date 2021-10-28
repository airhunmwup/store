<?php

namespace App\Http\Controllers;

use App\Models\Payout;
use Illuminate\Http\Request;

class PayoutController extends Controller
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
            'account_name' => 'required|string',
            'account_number' => 'required|string',
            'sort_code' => 'required|string',
            'bank_name' => 'required|string',
        ]);
        $payout = Payout::create([
            'account_name' => $fields['account_name'],
            'account_number' => $fields['account_number'],
            'sort_code' => $fields['sort_code'],
            'currency' => $request->currency,
            'bank_name' => $fields['bank_name'],
            'user_id' => $request->user()->id,
        ]);
        return $payout;
    }
    public function checkPayout(Request $request)
    {
        $id = $request->user()->id;
        return Payout::where('user_id', $id)->get();
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Payout  $payout
     * @return \Illuminate\Http\Response
     */
    public function show(Payout $payout)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Payout  $payout
     * @return \Illuminate\Http\Response
     */
    public function edit(Payout $payout)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Payout  $payout
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payout $payout)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Payout  $payout
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payout $payout)
    {
        //
    }
}
