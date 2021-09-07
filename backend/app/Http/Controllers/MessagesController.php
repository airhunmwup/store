<?php

namespace App\Http\Controllers;

use App\Models\messages;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $inbox_messages = Messages::where('reciever_id', $id)->get();
        $sent_messages = Messages::where('sender_id', $id)->get();
        return response([
         'inbox'=> $inbox_messages,
         'sent'=> $sent_messages
        ], 200);
    }
     public function get($id)
    {
        $message = Messages::where('id', $id)->get();       
        return $message;
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
            'message' => 'required|string',
        ]);

        $message = Messages::create([
            'sender_id' => $request->sender_id,
            'sender_name' => $request->sender_name,
            'reciever_id' => $request->reciever_id,
            'message' => $fields['message'],
        ]);

        $response = [
            'message' => $message 
        ];

        return response($response, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\messages  $messages
     * @return \Illuminate\Http\Response
     */
    public function show(messages $messages)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\messages  $messages
     * @return \Illuminate\Http\Response
     */
    public function edit(messages $messages)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\messages  $messages
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, messages $messages)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\messages  $messages
     * @return \Illuminate\Http\Response
     */
    public function destroy(messages $messages)
    {
        //
    }
}
