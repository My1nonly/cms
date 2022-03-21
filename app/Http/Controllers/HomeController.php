<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
        return view('index');
    }

    public function dishes(){
        return view('dishes');
    }

    public function map(){
        return view('map');
    }

    public function book(){
        return view('book');
    }

    public function contact(){
        return view('contact');
    }

    public function feedback(){
        return view('feedback');
    }
}
