@extends('lay/layUser')

@section('title', "$materi->judul")

@section('navbar')

@section('konten')

<div class="jumbotron jumbotron-fluid materi bg-dark">
    <div class="container">
        <div class="row">
            <div class="col pertanyaan justify-content-center">
                <div class="col-md-12"></div>
                <h2 class="mb-5"> {{$materi->judul}} </h2>
                <a href="\Home\tanya" class="btn btn-outline-light mr-3">Saya mau bertanya</a>
                <a href="\Home" class="btn btn-outline-light">Kembali ke topik</a>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="col-md-10">
                <div class="card" style="">
                    <div class="card-body">
                        <h2 class="card-title">{{$materi->judul}}</h2>
                        <h5 class="card-text">{{$materi->pertanyaan}}</h5>
                        <span class="bg-light">#Tag</span>
                        <span class="bg-light float-right">Kategori</span>
                    </div>
                </div>
            </div>
            <div class="col-md-10">
                <div class="card jawaban mt-3 mb-1">
                    <div class="card-body">
                        <h4>Semua Diskusi</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-10">
                <div class="card mt-2">
                    <div class="card-body">
                        <h6 class="card-subtitle mb-2 text-muted">
                            <script id="dsq-count-scr" src="//safitri02.disqus.com/count.js" async></script>
                        </h6>
                        <h5> </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-10">
        <div id="disqus_thread"></div>
        <script>
        (function() {
            var d = document,
                s = d.createElement('script');
            s.src = 'https://safitri02.disqus.com/embed.js';
            s.setAttribute('data-timestamp', +new Date());
            (d.head || d.body).appendChild(s);
        })();
        </script>
        <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by
                Disqus.</a></noscript>
    </div>
</div>

@endsection

@section('footer')