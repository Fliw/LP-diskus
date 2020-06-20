<?php

namespace App\Http\Controllers;
// use Alert;
use Auth;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function home()
    {
    	return view('Home/index');
    }

    public function tentang()
    {
    	return view('Home/tentang');
    }

}
