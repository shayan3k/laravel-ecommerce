<?php

namespace App\Http\Controllers;

use App\Cart;
use App\User;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
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
     * Add new Items to cart.
     *
     * @return \Illuminate\Http\Response
     */
    public function add(Request $request, $id)
    {
            $quantity = $request->quantity;
            $product = Product::find($id);


            if( User::find(Auth::id())->products()
            ->where('product_id','=',$id)
            ->where('productable_id','=' , Auth::id())->count()){

                return redirect()->route('query', ['query' => $id])->with(['status'=> 'warning' , 'message'=>'The item is already in your cart :)', 'product' => $product]);



            }
            else{
                $user = User::find(Auth::id())->products()->attach([$id] , ['quantity'=>$quantity, 'created_at' => now() , 'updated_at' => now()]);

                return redirect()->route('query', ['query' => $id])->with(['status'=> 'success' , 'message'=>'You item has been added to the cart :)', 'product' => $product]);

            }







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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart $cart)
    {
        //
    }
}
