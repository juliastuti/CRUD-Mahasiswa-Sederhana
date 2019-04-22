<!DOCTYPE html>
<html>
<head>
	<title>Edit Data Mahasiswa</title>
	<link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body>
	<div class="container">
		<br/>
		<h2 class='text-center'>Edit Data Mahasiswa</h2>
		<br/>
		<br/>
		@foreach($mahasiswa as $mhs)
		<form action="/mahasiswa/update" method="post">
			@csrf
			<input type="hidden" name="id" value="{{$mhs->id}}">
			<div class="form-group">
				<label for="nim"> NIM </label> 
				<input type="text" name="nim" class="form-control"  value="{{$mhs->NIM}}">
			</div>
			<div class="form-group">
				<label for="nama"> Nama Lengkap </label>
				<input type="text" name="nama" class="form-control" value="{{$mhs->nama}}">
			</div>
			<div class="form-group">
				<label for="umur"> Umur </label>
				<input type="text" name="umur" class="form-control" value="{{$mhs->umur}}">
			</div>
			<div class="form-group">
				<label for="alamat"> Alamat </label>
				<input type="text" name="alamat" class="form-control" value="{{$mhs->alamat}}">
			</div>
			<br/>
			<button type="submit" class="btn btn-default">Simpan</button>
			<br/>
			<br/>
			<button class="btn btn-default"><a href="/mahasiswa"> Kembali </a></button>
		</form>
		@endforeach
</body>
</html>