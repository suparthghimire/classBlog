<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $title = "Home";
        return view('index',compact('title'));
        // return view('index')->with('&title',$title);
    }
    public function about(){
        $title = "About";
        return view('about',compact('title'));
        // return view('index')->with('&title',$title);
    }
    public function blogs(){
        $title = "Blogs";
        return view('blogs',compact('title'));
        // return view('index')->with('&title',$title);
    }
}
