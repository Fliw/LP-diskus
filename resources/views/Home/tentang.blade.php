
@extends('lay/lay')
@section('title', 'Tentang Share Room')
@section('navbar')

@section('konten')

<div class="jumbotron jumbotron-fluid">
  <div class="container">
      <div class="row">
      <div class="col">
        <div class="col-md-5 float-right">
          <img  class="img" src="{{url('asset/img/about.svg')}}">
       </div>
      <div class="row">
        <div class="col-md-7">
      </div>

        <h2> Yuk diskusi bareng di <br> <span>Share Room</span>! </h2>
        <h4>Buka pintu ilmu pengetahuan dengan pertanyaan. <br>
        Mari ber-diskusi yang bermanfaat bareng <span>Share Room</span>! </h4>
       <!--  <h6> Untuk memulai bertanya silahkah masuk terlebih </h6>
        <a class="nav-item  btn btn-primary tombol" href="#">Masuk</a> -->
        <div class="input-group mt-5">
          <input type="text" class="form-control" autofocus="" placeholder="Masukkan Email anda untuk gabung. . .">
          <div class="input-group-append">
            <a href="/registrasi" class="btn btn-primary tombol">Gabung</a>
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>
</div>
<!-- Akhir Jumbotron -->


<!-- Container -->
<div class="container">
<!-- Info panel -->
    <div class="row justify-content-center">
      <div class="col-md-9 info-panel">
        <div class="row">
          <div class="col-md">
            <img class="imgpanel float-left" src="{{url('asset/img/member.png')}}">
            <h4>Kapan pun & Dimana pun</h4>
            <p>Lorem ipsum dolor sit amet.</p>
          </div>
          <div class="col-md">
            <img class="imgpanel float-left" src="{{url('asset/img/member.png')}}">
            <h4>Berbagi Ilmu</h4>
            <p>Lorem ipsum dolor sit amet.</p>
          </div>
          <div class="col-md">
            <img class="imgpanel float-left" src="{{url('asset/img/member.png')}}">
            <h4>Menghadapi era 5.0</h4>
            <p>Lorem ipsum dolor sit amet.</p>
          </div>
        </div>
      </div>
    </div>
<!-- Akhir info panel -->

  <h3 class="jtanya mt-5">Kontak Developer</h3>
  <div class="row">
    <div class="col">
    <div class="col-md-6 mt-3">
      <img class="kontak" src="{{url('asset/img/contact.svg')}}">
    </div>
  </div>
  <div class="kontak2 col-md-6 float-right mb-3">
      <h5>
        Email     : safitri1337@gmail.com / safitriufa1337@gmail.com <br> <br>
        Facebook  : <a href="https://web.facebook.com/Fitri1337" class="span"> Fitri </a> <br>
        Instagram : <a href="https://www.instagram.com/im.safitri_"> Safitri </a> <br>
        Github    :<a href="https://github.com/safitri02"> Safitri </a>
      </h5>
  </div>
</div>
</div>

</div>
<!-- Akhir container -->

</div>
</div>

@endsection
@section('footer')
