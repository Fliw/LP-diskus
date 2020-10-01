<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class authController extends Controller
{
	/**
	 *
	 * Return view auth
	 * @return view
	 *
	 */
    public function auth()
    {
        return view('Auth/login');
    }
	/**
	 *
	 *
	 * login attempt
	 * @param var Request
	 * @return string OR view
	 * 
	 */
    public function prosesLogin(Request $request)
    {
        if (Auth::attempt($request->only('email', 'password'))) {

            return redirect('/Home');
        } else {

            echo "Gagal";
            return redirect('/login');
        }
    }
	/**
	 *
	 *return view register
	 * @return view
	 *
	 */
    public function register()
    {
        return view('Auth/register');
    }
	/**
	 *
	 *validate register request
	 *@param var Request
	 *@return view
	 *
	 */
    public function prosesRegistrasi(Request $request)
    {
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
