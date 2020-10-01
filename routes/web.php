<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

    /**
	 *
     * @return login Route
	 *
	 *
	 */
Route::get('/login', 'authController@auth');
Route::post('/proses', 'authController@prosesLogin');
Route::get('/registrasi', 'authController@register');
Route::post('/prosesRegistrasi', 'authController@prosesRegistrasi');

    /**
	 *
	 * @return user route
	 *
	 */
Route::get('/', 'homeController@home');
Route::get('/tentang', 'homeController@tentang');

    /**
	 *
	 * @return anggota route
	 *
	 */
Route::get('/Home', 'materiController@index');
Route::get('/Home/tanya', 'materiController@create');
Route::post('/Home/tanya', 'materiController@store');
Route::get('/topik/detail/{materi}', 'materiController@show');
Route::get('/Home/aturan', 'materiController@aturan');

    /**
	 *
	 * @return kategori route
	 *
	 */
Route::get('/kategori/create', 'kategoriController@create');
Route::post('/kategori/create', 'kategoriController@store');
Route::PUT('/kategori/update/{id}', 'kategoriController@update');
Route::get('/kategori/delete/{id}', 'kategoriController@destroy');
    /**
	 *
	 * @return tag route
	 *
	 */
Route::get('/tag/create', 'tagController@create');
Route::post('/tag/create', 'tagController@store');
Route::get('/tag/delete/{id}', 'tagController@destroy');

    /**
	 *
	 * @return comment route
	 *
	 */
Route::post('/comment/create/{id}', 'comentController@buatKomen')->name('buatkomen.store');








