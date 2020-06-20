
@extends('lay/layUser')

@section('title', 'Halaman bertanya')

@section('navbar')
@section('konten')




<!-- Jumbotron -->

<div class="tanya1">
<div class="jumbotron jumbotron-fluid materi bg-dark">
  <div class="container">
  	<div class="row">
  		<div class="col pertanyaan justify-content-center">
			<div class="col-md-12"></div>
			<h2>Buatlah Pertanyaan Baru</h2>
			<h4 class="mb-5">Buka pintu ilmu pengetahuan dengan kunci pertanyaan</h4>
			<a href="\Home\aturan" class="btn btn-outline-light mr-3">Baca aturan tanya</a>
			<a href="\Home" class="btn btn-outline-light">Kembali ke topik</a>
			</div>
  		</div>
  	</div>
</div>
</div>

<!-- Akhir Jumbotron -->



<div class="container mt-5">
	<div class="row">
		<div class="col-md-10">
				<form action="/Home/tanya" method="post">
					@csrf
					<div class="input-group mb-3">
					  <input type="text" class="form-control" name="judul" aria-label="Default" placeholder="Judul pertanyaan" autofocus="" aria-describedby="inputGroup-sizing-default">
					</div>
					<div class="input-group mb-3">
					  <input type="text" class="form-control" name="dari" aria-label="Default" placeholder="Dari..." autofocus="" aria-describedby="inputGroup-sizing-default">
					</div>
					<div class="input-group mb-3">
					 <select name="id_kategori" class="custom-select">
					  <option selected>Pilih Kategori</option>
					  @foreach($kategori as $kat)
					  <option value="{{$kat->id}}">{{$kat->kategori}}</option>
					  @endforeach
					</select>
					</div>
					<div class="form-check form-check-inline">
						@foreach($tags as $tag)
						<input class="form-check-input" type="checkbox" name="tag" id="inlineCheckbox1" value="{{$tag->id}}">
						<label class="form-check-label mr-3" for="inlineCheckbox1 ">{{$tag->nama}}</label>
						@endforeach
					</div>
					<div class="input-group">
					  <textarea class="form-control" name="pertanyaan" rows="8" autofocus="" placeholder="Tulis pertanyaan disini..." aria-label="With textarea"> </textarea>
					</div>				
					<button type="submit" class="btn btn-secondary btn-lg btn-block btn-dark mt-4">Post Pertanyaan</button>
			</form>
		</div>
	</div>
</div>

@endsection

@section('footer')


@section('ckeditor')
<script>
     CKEDITOR.replace('pertanyaan');
</script>




























