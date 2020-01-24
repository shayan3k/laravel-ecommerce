<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{

    /**
     * Display a listing of the Blog Posts.
     *
     * @return \Illuminate\Http\Response
     */
    public function blog()
    {
            $posts = DB::table('posts')->orderBy('created_at', 'desc')->paginate(15);
            return view('blog')->with(['blogPosts' => $posts]);
    }


    /**
     * Display a single blog Post.
     *
     * @return \Illuminate\Http\Response
     */
    public function single($id)
    {

            $post = Post::find($id);
            return view('blog-detail')->with(['post' => $post]);
    }




}
