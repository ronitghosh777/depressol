<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Depress;
use App\Http\Requests;

class PostController extends Controller
{
    public function createPost(Request $request)
    {
        $this->validate($request,[
            'depression'=>'required|min:6|max:4000',
            'name'=>'max:40'
        ]);
        $depress = new Depress();
        $depress->depression = $request['depression'];
        if($request['name'])
            $depress->name = $request['name'];
        else
            $depress->name = "Depressed Anonymous";
        if($depress->save())
            return redirect()->route('home')->with('info', 'You have been successfully relieved out of your depression')
                ->with('identity', $depress->id);
        else
            return redirect()->back();
    }

    public function showPost()
    {
        $posts=Depress::orderBy('id','DESC')->get();
        return redirect()->route('home')->with('posts',$posts);
    }
}
