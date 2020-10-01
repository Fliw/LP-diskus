<?php

namespace App\Http\Controllers;

use Alert;
use App\Kategori;
use App\Materi;
use App\Tags;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class materiController extends Controller
{
    /**
	 *
	 *@return view with compact
	 *
	 */
    public function index()
    {
        $materi = Materi::paginate(12);
        return view('User/home', compact('materi'));
    }
    /**
	 *
	 *@return view with ORM
	 *
	 */
    public function create()
    {
        $kategori = Kategori::all();
        $tags = Tags::all();
        return view('User/tanya')->withKategori($kategori)->withTags($tags);
    }
    /**
	 *
     *@param var request
     *@return redirect 
	 *
	 */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'id_kategori' => 'required|integer',
            'dari' => 'required',
            'pertanyaan' => 'required',
        ]);

        $materi = new Materi;
        $materi->judul = $request->judul;
        $materi->id_kategori = $request->id_kategori;
        $materi->slug = Str::slug($materi->judul);
        $materi->dari = $request->dari;
        $materi->pertanyaan = $request->pertanyaan;

        $materi->save();

        return redirect('/Home');

        if ($materi) {
            Alert::success('Pertanyaan Berhasil di post pak', 'selamat');
            return redirect('/Home');
        } else {
            Alert::error('Pertanyaan gagal di post pak', 'Yeahhh');
            return redirect('/Home/tanya');
        }
    }
    /**
	 *
	 *@param slug
	 *@return view with compact
	 */
    public function show($slug)
    {
        $materi = Materi::where('slug', '=', $slug)->first();
        return view('User/materi', compact('materi'));
    }
    /**
	 *
	 *@return view
	 *
	 */
    public function aturan()
    {
        return view('User/aturan');
    }
}
