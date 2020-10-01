<?php

namespace App\Http\Controllers;

// use Alert;

class homeController extends Controller
{
    /**
	 *
	 *@return view
	 *
	 */
    public function home()
    {
        return view('Home/index');
    }
    /**
	 *
	 *@return view 
	 *
	 */
    public function tentang()
    {
        return view('Home/tentang');
    }

}
