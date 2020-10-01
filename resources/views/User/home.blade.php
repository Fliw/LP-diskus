@extends('lay/layUser')

@section('title','Selamat Datang')

@section('navbar')

@section('konten')

<div id="carouselExampleIndicators" class="carousel slide slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="{{url('asset/img/miting.jpg')}}" alt="Third slide">
            <div class="carousel-caption d-none d-md-block">
                <div class="row">
                    <div class="col">
                        <div class="col-md-12">
                            <h1>Selamat Datang <span>Safitri</span>, Selamat Bergabung dengan <span>Share-Room</span>!
                            </h1>
                            <h3>Disini kamu dapat berbagi kapan saja dan dimana saja bareng kita</h3>
                            <a href="#materi" class="btn tombol btn-primary mb-5"> Lihat Semua Topik</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{url('asset/img/student.jpg')}}" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
                <h1>Temukan <span>pengalaman</span> baru dengan kita!</h1>
                <h3>Bagikan ilmu-mu dan pengalaman disini.<br> Diskusi-kan pertanyaanmu bareng <span>kita</span></h3>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{url('asset/img/tunjuk.jpg')}}" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
                <h1>Temukan hal baru!</h1>
                <h3>Disini kamu bakal menemukan sesuatu yang baru.<br> Teman baru, ilmu baru dan tentunya pengalam baru!
                </h3>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<div class="container">
    <div id="materi">
        <a href="Home\tanya" class="btn btn-outline-secondary mt-5 mr-3">Saya Mau bertanya</a>
        <a href="Home\aturan" class="btn btn-outline-secondary mt-5">Baca aturan tanya</a>
        <h1 class="judul">Semua Topik</h1>
        <div class="row">
            @foreach($materi as $materi)
            <div class="col-lg-4">
                <div class="card mt-5">
                    <div class="card-body">
                        <h5 class="card-title"><a
                                href="http://localhost:8000/topik/detail/{{$materi->slug}}">{{ Str::limit($materi->judul) }}
                            </a></h5>
                        <h6 class="card-subtitle mb-2 text-muted"> {{date('j F Y', strtotime($materi->created_at))}} by
                            {{$materi->dari}}</h6>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>
</div>
@endsection

@section('footer')