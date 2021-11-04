<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Addressforbuyers;
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
            'user_type' => 'required|string',
            'phonenumber' => 'required|string',
            'postal_code' => 'required|string',
            'address_line1' => 'required|string',
            'address_line2' => 'string|nullable',
            'town_city' => 'required|string',
        ]);

        $user = User::create([
            'first_name' => $fields['first_name'],
            'last_name' => $fields['last_name'],
            'email' => $fields['email'],
            'password' => bcrypt($fields['password']),
            'user_type' => $fields['user_type']
        ]);
        
        
        $fullname = $fields['first_name']." ".$fields['last_name'];
        $address = Addressforbuyers::create([
            'user_id' => $user->id,
            'country' => $request->country,
            'fullname' => $fullname,
            'phonenumber' => $fields['phonenumber'],
            'postal_code' => $fields['postal_code'],
            'address_line1' => $fields['address_line1'],
            'address_line2' => $request->address_line2,
            'town_city' => $fields['town_city'],
            'county' => $request->county,
            'delivery_instruction' => $request->delivery_instruction,
            'securitycode_callboxnumber' => $request->securitycode

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

    public function saveMobile(Request $request){
      $id =  $request->user()->id;
      $code = $request->code;
      $mobile = $request->mobile;
      $num = $code."".$mobile;
      
      $upd = User::where('id', $id)->update([
            'mobile' => $num,           
        ]);
      $info = Addressforbuyers::where('user_id', $id)->update([
            'phonenumber' => $num,           
        ]);
        return $upd;
    }
        public function getMobile(Request $request){
      $id =  $request->user()->id;
      
      $info = Addressforbuyers::where('user_id', $id)->first();

        return $info;
    }
    
}
