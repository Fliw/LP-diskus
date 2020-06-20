<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Auth;

class authController extends Controller
{
    public function auth()
    {
    	return view('Auth/login');
    }

    public function prosesLogin(Request $request)
    {
    	If(Auth::attempt($request->only('email', 'password'))){


	// Alert::toast('Berhasil Masuk Pak!','success');
     // Alert::success('Selamat!','Berhasil Masuk pak, Selamat Datang!');
		return redirect('/Home');
    } else{

		echo "Gagal";
		return redirect('/login');
    }
}

	public function register()
	{
		return view('Auth/register');
	}

	public function prosesRegistrasi(Request $request)
	{

		// dump($request);
		$request::validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);


		 	User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

		return redirect('/login');

	}

}

