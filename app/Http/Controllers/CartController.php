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


                $condition = new \Darryldecode\Cart\CartCondition(array(
                    'name' => 'Delivery',
                    'type' => 'tax',
                    'target' => 'total', // this condition will be applied to cart's subtotal when getSubTotal() is called.
                    'value' => '+7',
                    'attributes' => array( // attributes field is optional
                        'value' => '7',
                    )
                ));

                \Cart::session($userID)->condition($condition);

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
     * Display the specified resource.
     *
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

        $userID = Auth::id(); // the user ID to bind the cart contents
        $products = \Cart::session($userID)->getContent();
        $subTotal = \Cart::session($userID)->getSubTotal();
        $total = \Cart::session($userID)->getTotal();
        $condition = \Cart::session($userID)->getCondition('Delivery');
        return view('cart')->with(['products'=>$products, 'subTotal' => $subTotal , 'total'=> $total, 'condition'=>$condition]);
    }

    /**
     * Remove the specified resource from storage.
     *
     *
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
     *
     * @return \Illuminate\Http\Response
     */
    public function clear()
    {
            $userID = Auth::id(); // the user ID to bind the cart contents
            \Cart::session($userID)->clear();
            return redirect()->back()->withErrors(['status'=>'success' , 'msg'=>'Cart has been cleared!']);
    }


    /**
     * Clear all Contents
     *
     *
     * @return \Illuminate\Http\Response
     */
    public function checkout()
    {
        $userID = Auth::id(); // the user ID to bind the cart contents
        $subTotal = \Cart::session($userID)->getSubTotal();
        $total = \Cart::session($userID)->getTotal();
        $condition = \Cart::session($userID)->getCondition('Delivery');
        return view('checkout')->with(['subTotal' => $subTotal , 'total'=> $total, 'condition'=>$condition]);
    }







    }

