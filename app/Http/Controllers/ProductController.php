<?php

namespace App\Http\Controllers;

use App\Post;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the Products.
     *
     * @return \Illuminate\Http\Response
     */
    public function shop()
    {
                $products = Product::orderBy('created_at', 'desc')
                ->paginate(15);




            return view('shop', ['allProducts' => $products]);
    }


    /**
     * Display a listing of the Products.
     *
     * @return \Illuminate\Http\Response
     */
    public function query($id, $p, $m)
    {
            dd($p,$m);
            $allProducts = Product::orderBy('created_at', 'desc')->paginate(15);
            return view('shop', ['allProducts' => $allProducts]);
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
     * Display the specified Product.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function single($id)
    {
        $product = Product::find($id);

        return view('product-detail')->with(['product'=>$product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

