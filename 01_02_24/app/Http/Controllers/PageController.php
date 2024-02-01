<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homepage(){
        $titolo = "IL BLOG DI MAICOL";
        return view('homepage', ['titolo'=>$titolo]);
    }
}
