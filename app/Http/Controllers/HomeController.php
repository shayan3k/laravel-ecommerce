<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function admin()
    {

        if(!Auth::user()->isAdmin()){

            $allProducts = Product::orderBy('created_at', 'desc')
            ->paginate(15);
            return view('shop')->with(['allProducts'=>$allProducts])->withErrors(['status'=>'danger' , 'msg'=>"You don't have access to that page, Surf shop instead :)"]);

        }



        $featuredImages = DB::table('featured_images')->get();
        dd($featuredImages);



        return view('admin')->with(['featuredImages'=>$featuredImages]);
    }
}

