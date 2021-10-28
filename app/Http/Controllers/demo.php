<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class demo extends Controller
{
    function showHome(){
        return view('HomePage');
    }
    function showAbout(){
        return view('AboutPage');
    }
    function showContact(){
        return view('ContactPage');
    }
}
