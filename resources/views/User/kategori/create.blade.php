
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
			<h2>Halaman Kategori</h2>
			</div>
  		</div>
  	</div>
</div>
</div>

<!-- Akhir Jumbotron -->



<div class="container mt-5">
	<div class="row">
		<div class="col-md-10">
				<form action="/kategori/create" method="post">
					@csrf
					<div class="input-group mb-3">
					  <input type="text" class="form-control" name="kategori" aria-label="Default" placeholder="Masukkan kategori" autofocus="" aria-describedby="inputGroup-sizing-default">
					</div>				
					<button type="submit" class="btn btn-secondary btn-lg btn-block btn-dark mt-4">Post Kategori</button>
			</form>

			<table class="table table-striped table-hover">
				 <thead>
				 	<tr class="bg-primary">
				 		<th>No</th>
				 		<th>Semua Kategori</th>
				 		<th>Aksi</th>
				 	</tr>
				</thead>
		
					<?php $no = 1; ?>
					@foreach ($kategori as $kat)
							<tr>
					<td> {{$no++}} </td>
					<td scope="row"> {{$kat->kategori}}</td>
					<td>
						<a href="/kategori/delete/{{$kat->id}}" class="btn btn-danger btn-sm">Hapus</a> 
						<a href="/kategori/update/{{$kat->id}}" class="btn btn-warning btn-sm" data-toggle="modal" 
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
<div class="modal fade" id="{{$kat->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Kategori</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       		<form action="/kategori/update/{{$kat->id}}" method="post">
				@csrf
				@method('PUT')
				<div class="input-group mb-3">
				  <input type="text" class="form-control" autofocus="" name="kategori" aria-label="Default" value="" placeholder="Edit kategori" autofocus="" aria-describedby="inputGroup-sizing-default">
				</div>				
			</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-primary">Simpan Kategori</button>
      </div>
    </div>
  </div>
</div>






@endsection
@section('footer')
























