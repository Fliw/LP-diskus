<?php

namespace App\Http\Controllers;

use App\materi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class userController extends Controller
{
    /**
	 *
	 *@param request
	 *@return view
	 */
    public function Home(Request $data)
    {
        $materi= materi::paginate(12);
        return view('/User/home', compact('materi'));
    }
    /**
	 *
	 *@param object materi
	 *@return view
	 */
    public function lihatTopik(materi $materi)
    {
        return view('/User/materi', compact('materi'));
    }
    /**
	 *
	 *@param request
	 *@return view
     * 
	 */
    public function tanya(Request $data)
    {
    	return view('User/tanya');
    }
}
