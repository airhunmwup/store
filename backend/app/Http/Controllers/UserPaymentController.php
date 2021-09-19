<?php

namespace App\Http\Controllers;

use App\Models\UserPayment;
use App\Models\OrderProduct;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use stdClass;

class UserPaymentController extends Controller
{
    //
    public function purchase(Request $request){

        $user = UserPayment::firstOrCreate(
            [
                'email' => $request->input('email')
            ],
            [
                'password' => Hash::make(Str::random(12)),
                'name' => $request->input('first_name') . ' ' . $request->input('last_name'),
                'address' => $request->input('address'),
                'city' => $request->input('city'),
                'state' => $request->input('state'),
                'zip_code' => $request->input('zip_code')
            ]
        );

        try {
            $payment = $user->charge(
                $request->input('amount'),
                $request->input('payment_method_id')
            );

            $payment = $payment->asStripePaymentIntent();

            $order = $user->orders()
                ->create([
                    'transaction_id' => $payment->charges->data[0]->id,
                    'total' => $payment->charges->data[0]->amount
                ]);

            foreach (json_decode($request->input('cart'), true) as $item) {
                $order->products()
                    ->attach($item['id'], ['quantity' => $item['qnty']]);
            }

            $order->load('products');
            return $order;

        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }

    }

    public function myorders(Request $request){
        
        $user = UserPayment::where('email', "alfredgreemie@gmail.com")->first();

        if(!$user){
            throw validationException::withMessages([
                'message' => '* Invalid User'
            ]);
        };

        $user_id = $user->id;
        $myorders = $user->orders()->where('user_payment_id',$user_id)->get();
        
        $myorders_id = [];
        foreach($myorders as $myorder){
            array_push($myorders_id, $myorder->id);
        }

        $myproducts = [];
        foreach($myorders_id as $id){
            array_push($myproducts, OrderProduct::where('order_id',$id)->get());
        }


        $myproduct_id = [];
        foreach($myproducts[0] as $key=>$id){
            array_push($myproduct_id, $id->products_id);
        }

        $products = [];
        foreach($myproduct_id as $id){
            array_push($products, Products::where('id',$id)->get());
        }

        $products_main = [];
        foreach($products as $id){
            array_push($products_main, $id[0]);
        } 

        $productHistory = [];
        $unique_orders = array_unique($myorders_id);
        foreach($unique_orders as $order_id){
            foreach($myproducts[0] as $key=>$product){
                if($order_id == $product->order_id){
                    $productHistory[$order_id][] = $product->products_id;
                }
            }

            
        }

        $response = [
            'user' => $user,
            'myorders' => $myorders,
            'myproducts' => $myproducts,
            'products' => $products_main,
            'productHistory' => $productHistory
        ];

        return response($response, 201);
    }
}