<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hello;
class HelloController extends Controller{
    public function index(){
        $hellos = Hello::all();
        return view("hello",[
            'hellos' => $hellos
        ]);
    }
}
