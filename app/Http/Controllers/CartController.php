<?php

namespace App\Http\Controllers;

use App\Cart;
use App\User;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
     /**
     * Add new Items to cart.
     *
     * @return \Illuminate\Http\Response
     */
    public function add(Request $request, $id)
    {
            $userID = Auth::id(); // the user ID to bind the cart contents


            if(\Cart::session($userID)->get($id . '_' . Auth::id()) )
            {
            return redirect()->back()->withErrors(['status'=>'danger' , 'msg'=>'The item is already in your cart']);
            }else {

                $quantity = $request->quantity;
                $Product = Product::find($id); // assuming you have a Product model with id, name, description & price
                $rowId = $id . '_' . Auth::id();
                \Cart::session($userID)->add(array(
                    'id' => $rowId,
                    'name' => $Product->name,
                    'price' => $Product->price,
                    'quantity' => $quantity,
                    'attributes' => array(
                        'thumbnail' => $Product->thumbnail
                      ),
                    'associatedModel' => $Product
                ));

                return redirect()->back()->withErrors(['status'=>'success' , 'msg'=>'The item was added to your cart']);


            }

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
     * @param  \App\User  $cart
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $userID = Auth::id(); // the user ID to bind the cart contents
        $products = \Cart::session($userID)->getContent();
        $subTotal = \Cart::session($userID)->getSubTotal();
        $total = \Cart::session($userID)->getTotal();
        return view('cart')->with(['products'=>$products, 'subTotal' => $subTotal , 'total'=> $total]);
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
    public function destroy($id)
    {
        $userID = Auth::id(); // the user ID to bind the cart contents
        \Cart::session($userID)->remove($id);
        return redirect()->back()->withErrors(['status'=>'success' , 'msg'=>'The item has been removed from the cart']);
    }



      /**
     * Clear all Contents
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function clear()
    {
            $userID = Auth::id(); // the user ID to bind the cart contents
            \Cart::session($userID)->clear();
            return redirect()->back()->withErrors(['status'=>'success' , 'msg'=>'Cart has been cleared!']);
    }







    }

