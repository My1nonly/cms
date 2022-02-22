<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return 'Hi! Welcome To Laravel';
    }

    public function about(){
        return view('about');
    }

    public function articles($id){
        echo "this is article pages with ID: $id";
    }
}
