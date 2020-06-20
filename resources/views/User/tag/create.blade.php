
@extends('lay/layUser')

@section('title', 'Halaman Kategori')

@section('navbar')
@section('konten')




<!-- Jumbotron -->

<div class="tanya1">
<div class="jumbotron jumbotron-fluid materi bg-dark">
  <div class="container">
  	<div class="row">
  		<div class="col pertanyaan justify-content-center">
			<div class="col-md-12"></div>
			<h2>Halaman Tag</h2>
			</div>
  		</div>
  	</div>
</div>
</div>

<!-- Akhir Jumbotron -->



<div class="container mt-5">
	<div class="row">
		<div class="col-md-10">
				<form action="/tag/create" method="post">
					@csrf
					<div class="input-group mb-3">
					  <input type="text" class="form-control" name="nama" aria-label="Default" placeholder="Masukkan Tag" autofocus="" aria-describedby="inputGroup-sizing-default">
					</div>				
					<button type="submit" class="btn btn-secondary btn-lg btn-block btn-dark mt-4">Post Tag</button>
			</form>

			<table class="table table-striped table-hover">
				 <thead>
				 	<tr class="bg-primary">
				 		<th>No</th>
				 		<th>Semua tag</th>
				 		<th>Aksi</th>
				 	</tr>
				</thead>
				
					<?php $no = 1; ?>
					@foreach ($tags as $tag)
					<tr>
					<td> {{$no++}} </td>
					<td> {{$tag->nama}}</td>
					<td>
						<a href="/tag/delete/{{$tag->id}}" class="btn btn-danger btn-sm">Hapus</a> 
						<a href="/tag/update/{{$tag->id}}" class="btn btn-warning btn-sm" data-toggle="modal" 
							data-target="modal">Edit</a>
					</td>
				</tr>
					@endforeach

			</table>

		</div>
	</div>
</div>

<!-- Modal Edit-->
<!-- Modal -->





@endsection
@section('footer')
























