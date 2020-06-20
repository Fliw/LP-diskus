<?php

namespace App\Http\Controllers;

use App\materi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class userController extends Controller
{
    public function Home(Request $data)
    {
    	 // $materi= materi::All()->paginate(12);
        $materi= materi::paginate(12);
        return view('/User/home', compact('materi'));
    }

    public function lihatTopik(materi $materi)
    {
        return view('/User/materi', compact('materi'));
    }

    public function tanya(Request $data)
    {
    	return view('User/tanya');
    }
}
