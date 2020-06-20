@extends('lay/lay')

@section('title', 'Share Room')

@section('navbar')

@section('konten')
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="col-md-5 mt-3 float-right">
       <img  class="img" src="{{url('asset/img/form.svg')}}">
       </div>
       <div class="col-md-1">
         <div> </div>
       </div>
       <div class="col-md-6 float-left">
      <form action="/prosesRegistrasi" method="post">
        @csrf
         <div class="card mt-5">
            <div class="card-header">
                Yuk lengkapi data diri sebelum gabung
            </div>
            <div class="card-body card-block">
                  <div class="row form-group">
                  <div class="col col-md-4">
                    <label for="nama" class=" form-control-label">Nama Lengkap</label>
                  </div>
                  <div class="col-12 col-md-8">
                    <input type="text" id="nama" autofocus="" autocomplete="off" name="name" value="{{ old('name') }}" placeholder="Masukkan Nama Lengkap" class="form-control">
                  </div>
              </div>
              <div class="row form-group">
                  <div class="col col-md-4">
                    <label for="hf-email" class=" form-control-label">Email</label>
                  </div>
                  <div class="col-12 col-md-8">
                    <input type="email" id="hf-email" autocomplete="off" value="{{ old('email') }}" name="email" placeholder="Masukkan Email" class="form-control">
                  </div>
              </div>
              <div class="row form-group">
                  <div class="col col-md-4">
                    <label for="hf-password" class=" form-control-label">Password</label></div>
                  <div class="col-12 col-md-8">
                    <input type="password" id="hf-password" autocomplete="off" name="password" placeholder="Masukkan Password" class="form-control">
                  </div>
              </div>
              <div class="row form-group">
                  <div class="col col-md-4">
                    <label for="hf-password" class=" form-control-label">Konfirmasi Password</label>
                  </div>
                  <div class="col-12 col-md-8">
                    <input type="password" id="hf-password" autocomplete="off" name="password" placeholder="Konfirmasi Password" class="form-control">
                  </div>
                    </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary btn-sm float-right tombol"> Gabung </button>
            </div>
        </div>
      </form>
   </div>
</div>
</div>
</div>
</div>

@endsection

@section('footer')