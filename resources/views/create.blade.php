<!DOCTYPE html>
<html>
<head>
	<title>Form Mahasiswa</title>
	<link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body>
	<div class="container">
		<br/>
		<h2>Tambah Data Mahasiswa</h2>
		<form action="/mahasiswa/store" method="post">
		{{csrf_field()}}
		<div class="form-group">
			<label for="nim"> NIM </label> 
			<input type="text" name="nim" class="form-control">
		</div>
		<div class="form-group">
			<label for="nama"> Nama Lengkap </label>
			<input type="text" name="nama" class="form-control">
		</div>
		<div class="form-group">
			<label for="umur"> Umur </label>
			<input type="text" name="umur" class="form-control">
		</div>
		<div class="form-group">
			<label for="alamat"> Alamat </label>
			<input type="text" name="alamat" class="form-control">
		</div>
		<br/>
		<button type="submit" class="btn btn-default">Simpan</button>
	</form>
	<br/>
	<button class="btn btn-default"><a href="/mahasiswa"> Kembali </a></button>
	<br/>
	<br/>
</div>
</body>
</html>