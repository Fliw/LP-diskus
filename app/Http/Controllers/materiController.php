<?php

namespace App\Http\Controllers;

use Alert;
use App\Materi;
use App\Kategori;
use App\Tags;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class materiController extends Controller
{
    
    public function index()
    {
        $materi= Materi::paginate(12);
        return view('User/home', compact('materi'));
    }

 
    public function create()
    {
        $kategori= Kategori::all();
        $tags= Tags::all();
        return view('User/tanya')->withKategori($kategori)->withTags($tags);
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'id_kategori' => 'required|integer',
            'dari' => 'required',
            'pertanyaan' =>'required'
        ]);

        // $materi= Materi::create($request->all());

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
        } else{
            Alert::error('Pertanyaan gagal di post pak', 'Yeahhh');
            return redirect('/Home/tanya');
        }
    }

    public function show($slug)
    {    
        $materi = Materi::where('slug','=', $slug)->first();
        return view('User/materi', compact('materi'));
    }

    
    public function edit(Materi $materi)
    {
        
    }

    

    public function update(Request $request, Materi $materi)
    {
        //
    }

    
    public function destroy(Materi $materi)
    {
        //
    }

    public function aturan()
    {
       return view('User/aturan');
    }
}
