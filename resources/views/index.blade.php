<!DOCTYPE html>
<html>
<head>
	<title>Data Mahasiswa</title>
	<link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body>

	<div class="container">
		<div class="card">
			<div class="card-body">

				<br/>
				
				<h2 class="text-center">Data Mahasiswa</h2>
				<br/>
				<div class="panel-body">
					<a href="/mahasiswa/tambah" class="btn btn-raised btn-primary">TAMBAH DATA MAHASISWA</a>
				</div>
				<br/>

				<table class="table table-bordered">
				 	<tr>
				 		<th>No</th>
				 		<th>NIM</th>
				 		<th>Nama</th>
				 		<th>Umur</th>
				 		<th>Alamat</th>
				 		<th>Opsi</th>
				 	</tr>
				 	@php(
                    $no = 1 {{-- buat nomor urut --}}
                    )
                    {{-- loop all mahasiswa --}}
				 	@foreach($mahasiswa as $mhs)
				 	<tr>
				 		<td>{{$no++}}</td>
				 		<td>{{$mhs->NIM}}</td>
				 		<td>{{$mhs->nama}}</td>
				 		<td>{{$mhs->umur}}</td>
				 		<td>{{$mhs->alamat}}</td>
				 		<td>
				 			<a class="btn btn-info" href="/mahasiswa/edit/{{$mhs->id}}">Edit</a>
				 			<a class="btn btn-primary" href="/mahasiswa/hapus/{{$mhs->id}}">Delete</a>
				 		</td>
				 	</tr>
				 	@endforeach
				 </table>
				 <br/>
				 <br/>
			</div>
		</div>
	</div>
</body>
</html>