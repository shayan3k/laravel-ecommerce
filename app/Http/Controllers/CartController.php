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

            if( User::find(Auth::id())->products()
            ->where('product_id','=',$id)
            ->where('productable_id','=' , Auth::id())->count()){

                return redirect()->back()->withErrors(['status'=>'danger' , 'msg'=>'The item is already in your cart']);
            }
            else{

                $product = Product::find($id);
                dd($product);
                $user = User::find(Auth::id())->products()->attach([$id] , ['quantity'=>$quantity, 'name '=>$product->thumbnail,'price'=>$product->price , 'thumbnail'=>$product->thumbnail, 'created_at' => now() , 'updated_at' => now()]);
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

        $product =


        $user = Auth::user();

        $products = DB::select('select * from productables where productable_id = ?', [$user->id]);

        dd($products);

        view('cart')->with(['user'=>$products]);


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
