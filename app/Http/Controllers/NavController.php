<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Depress;
use App\Http\Requests;

class NavController extends Controller
{
    public function home(Request $request)
    {
        $posts=Depress::orderBy('id','DESC')->paginate(15);
        return view('home')->with('posts',$posts);
    }

    public function liked()
    {
        $posts=Depress::orderBy('like','DESC')->paginate(15);
        return view('liked')->with('posts',$posts);
    }

    public function disliked()
    {
        $posts=Depress::orderBy('dislike','DESC')->paginate(15);
        return view('disliked')->with('posts',$posts);
    }
}
