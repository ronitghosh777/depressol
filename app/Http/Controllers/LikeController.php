<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Depress;
use App\Http\Requests;

class LikeController extends Controller
{
    public function postLike(Request $request)
    {
        $post_idl = $request['postIdl'];
        $postL = Depress::find($post_idl);
        $postL['like'] = $postL['like'] + 1;
        $flagL=$request['flagL'];
        $flagD=$request['flagD'];

        if($flagL)
            $postL['like'] = $postL['like'] - 2;

        if($flagD)
            $postL['dislike'] = $postL['dislike']-1;

        $postL->save();
        return null;
    }

    public function postDislike(Request $request)
    {
        $post_idd = $request['postIdd'];
        $postD = Depress::find($post_idd);
        $postD['dislike'] = $postD['dislike'] + 1;
        $flagL=$request['flagL'];
        $flagD=$request['flagD'];

        if($flagL)
            $postD['like'] = $postD['like'] - 1;

        if($flagD)
            $postD['dislike'] = $postD['dislike']-2;

        $postD->save();
        return null;
    }
}
