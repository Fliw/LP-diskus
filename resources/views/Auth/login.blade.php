@extends('lay/lay')

@section('title', 'Silahkan masuk')

@section('navbar')

@section('konten')
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="col-md-5 float-right">
       <img  class="img" src="{{url('asset/img/login2.svg')}}">
       </div>
       <div class="col-md-1">
         <div> </div>
       </div>
       <div class="col-md-6 float-left mt-5">
      <div class="form mt-5">
         <div class="card">
            <div class="card-header">
                Silahkan Masuk
            </div>
            <form action="/proses" method="post" class="form-horizontal">
            <div class="card-body card-block">
                  @csrf
              <div class="row form-group">
                  <div class="col col-md-4">
                    <label for="hf-email" class=" form-control-label">Email</label>
                  </div>
                  <div class="col-12 col-md-8">
                    <input type="email" id="hf-email" autofocus="" name="email" placeholder="Masukkan Email" required="" class="form-control">
                  </div>
              </div>
              <div class="row form-group">
                  <div class="col col-md-4">
                    <label for="hf-password" class=" form-control-label">Password</label></div>
                  <div class="col-12 col-md-8">
                    <input type="password" id="hf-password" name="password" placeholder="Masukkan Password" required="" class="form-control">
                  </div>
              </div>
            </div>
                <button class="btn btn-primary btn-sm float-right tombol mr-3"> Masuk </button>
        </form>
        </div>
    </div>
   </div>
</div>
</div>
</div>
</div>

@endsection

@section('footer')