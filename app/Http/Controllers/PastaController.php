<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pasta;

class PastaController extends Controller
{
    public function dishes(){
        
        $Pasta = Pasta::all();
        return view('homepage', compact('Pasta'));
    }
}
