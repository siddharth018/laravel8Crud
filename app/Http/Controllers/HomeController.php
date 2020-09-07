<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index($id)
    {
        return view('welcome',['id' =>$id]);
    }
    public function contact() 
    {
        return view('contact');
    }
    public function contactpost(Request $request) 
    {
        $all = $request->fullUrl();
        
         print_r($all);
    }
}
