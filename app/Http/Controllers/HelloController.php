<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Date;

class HelloController extends Controller
{
    public function index(){
        $data = ['msg' => 'これはコントローラから渡されたメッセージです'];
        return view('hello.index', $data);
    }
}
