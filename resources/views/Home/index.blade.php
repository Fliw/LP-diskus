@extends('lay/lay')

@section('title', 'Share Room')

@section('navbar')

@section('konten')
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="col-md-5 mt-3 float-right">
                    <img class="img" src="{{url('asset/img/koneksi.svg')}}">
                </div>
                <div class="col-md-7 float-left">
                    <h2>Mari saling terhubung dengan <span>Share.Room</span>!</h2>
                    <h3>Apa itu <span>Share Room</span> ...?</h3>
                    <h4>Share Room Merupakan salah satu platform online yang membahas seluruh hal sekalian tempat
                        berbagi pengalaman, tutorial, dan diskusi. <br> <br>
                        Yuk diskusi topik bareng Kita dan gabung sekarang!</h4>
                    <a class="btn btn-primary tombol mt-5" href="/registrasi">Gabung</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer')