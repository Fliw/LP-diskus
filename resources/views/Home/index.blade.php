@extends('lay/lay')

@section('title', 'Share Room')

@section('navbar')

@section('konten')
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="col-md-5 mt-3 float-right">
       <img  class="img" src="{{url('asset/img/koneksi.svg')}}">
       </div>
       <div class="col-md-7 float-left">
    <h2>Mari saling terhubung dengan <span>Share.Room</span>!</h2>
<!--     <h4 class="display-4">Mari bergabung dengan E-class!</h4> -->
   <h3>Apa itu <span>Share Room</span> ...?</h3>
  <h4>Share Room Merupakan salah satu platform online yang membahas seluruh hal sekalian tempat berbagi pengalaman, tutorial, dan diskusi. <br> <br>
    Yuk diskusi topik bareng Kita dan gabung sekarang!</h4>
   <a class="btn btn-primary tombol mt-5" href="/registrasi">Gabung</a>
   </div>
</div>
</div>
</div>
</div>
<!-- Akhir jumbotron -->
<!-- 
<div class="container">
  <h3 class="jtanya">Kontak Developer</h3>
  <div class="row">
    <div class="col">
    <div class="col-md-6 mt-5">
      <img class="kontak" src="{{url('asset/img/contact.svg')}}">
    </div>
  </div>
  <div class="kontak2 col-md-6 float-right">
      <h5>
        Email     : safitri1337@gmail.com / safitriufa1337@gmail.com <br> <br>
        Facebook  : <a href="https://web.facebook.com/Fitri1337" class="span"> Fitri </a> <br>
        Instagram : <a href="https://www.instagram.com/im.safitri_"> Safitri </a> <br>
        Github    :<a href="https://github.com/safitri02"> Safitri </a>
      </h5>
  </div>
</div>
</div>
</div> -->

@endsection

@section('footer')