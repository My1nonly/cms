<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function products(){
        return "this is list of products";
    }

    public function newspage(){
        return "This is list of the news";
    }

    public function program(){
        return "this is the list of programs";
    }

    public function about(){
        return "About Us";
    }
}
