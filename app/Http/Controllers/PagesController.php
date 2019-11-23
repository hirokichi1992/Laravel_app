<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function about(){
        $data = [];
        $data['firstname'] = "hiroki";
        $data['lastname'] = "kanda";

        return view('pages.about',$data);

        /*compact関数を使用するパターン　→　ローカル変数から配列を作成
        $firstname = "hiroki";
        $lastname = "kanda";

        return view('pages.about', compact($firstname, $lastname));

        */
         
        //return view('pages.about');
    }

    public function contact(){
        return view('pages.contact');
    }
}
