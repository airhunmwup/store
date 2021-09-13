<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    //
    public function register(Request $request){

        $fields = $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|string|unique:users,email',
            'password' => 'required|string',
            'user_type' => 'required|string'
        ]);

        $user = User::create([
            'first_name' => $fields['first_name'],
            'last_name' => $fields['last_name'],
            'email' => $fields['email'],
            'password' => bcrypt($fields['password']),
            'user_type' => $fields['user_type']
        ]);

        $token = $user->createToken('AppToken')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response($response, 201);
    }

    public function logout(Request $request){
        $request->user()->currentAccessToken()->delete();

        return [
            "message" => "You've signed out."
        ];
    }


    public function login(Request $request){

        $fields = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string'
        ]);

        $user = User::where('email', $fields['email'])->first();

        if(!$user || !Hash::check($fields['password'], $user->password)){
            throw validationException::withMessages([
                'message' => '* Invalid login details'
            ]);
        }

        $token = $user->createToken('AppToken')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response($response, 201);
    }

    public function changeEmail(Request $request){
        $fields = $request->validate([
            'email' => 'required|email',
        ]);

        $email = User::find($request->id);
        $email->email = $fields['email'];
        $email->save();

        $response = [
            'email' => $email
        ];

        return response($response, 201);
    }

    public function changeName(Request $request){
        $fields = $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
        ]);

        $user = User::find($request->id);
        $user->first_name = $fields['first_name'];
        $user->last_name = $fields['last_name'];
        $user->save(); 

        $response = [
            'user' => $user
        ];

        return response($response, 201); 
    }

    public function changePassword(Request $request){
        $fields = $request->validate([
            'currentpassword' => 'required|string',
            'password' => 'confirmed|required|string',
            'password_confirmation' => 'required|string'
        ]);

        $user = User::find($request->id);
        if(!Hash::check($fields['currentpassword'], optional($user)->password)){
            throw validationException::withMessages([
                'message' => '* Invalid login details'
            ]);
        }elseif(Hash::check($fields['currentpassword'], $user->password)){
            $user->password = bcrypt($fields['password']);
            $user->save(); 
        }

        $response = [
            'user' => $user
        ];

        return response($response, 200); 
    }

    
    
}
