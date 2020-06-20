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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materi= Materi::paginate(12);
        return view('User/home', compact('materi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori= Kategori::all();
        $tags= Tags::all();
        return view('User/tanya')->withKategori($kategori)->withTags($tags);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'id_kategori' => 'required',
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Materi  $materi
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {    
        $materi = Materi::where('slug','=', $slug)->first();
        return view('User/materi', compact('materi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Materi  $materi
     * @return \Illuminate\Http\Response
     */
    public function edit(Materi $materi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Materi  $materi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Materi $materi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Materi  $materi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Materi $materi)
    {
        //
    }

    public function aturan()
    {
       return view('User/aturan');
    }
}
