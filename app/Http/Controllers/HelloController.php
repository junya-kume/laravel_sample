<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    //
    public function index()
    {
        $data["name"] = "武者小路";  // (1)
    	return view("hello", $data);  // (2)
    }
}
