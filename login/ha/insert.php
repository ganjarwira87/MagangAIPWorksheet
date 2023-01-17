<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<title>CRUD</title>
</head>
<body>
	<div class="container mt-5 ">
		<center class="mb-5" ><h2><img src="https://fontmeme.com/permalink/230112/ddf17f14822c656f5f6f3e3f994bcb02.png" alt=""></h2></center>
		<hr>
		<?php if (isset($_GET['pesan'])) { ?>
			<?php if ($_GET['pesan'] == "berhasil") { ?>
				<div class="alert alert-primary" role="alert">
					Berhasil Menambahkan Data Siswa
				</div>
			<?php }elseif ($_GET['pesan'] == "gagal") { ?>
				<div class="alert alert-danger" role="alert">
					Gagal Menambahkan Data Siswa
				</div>
			<?php }elseif ($_GET['pesan'] == "ekstensi") { ?>
				<div class="alert alert-warning" role="alert">
					Ekstensi File Harus PNG Dan JPG
				</div>
			<?php }elseif ($_GET['pesan'] == "size") { ?>
				<div class="alert alert-warning" role="alert">
					Size File Tidak Boleh Lebih Dari 2 MB
				</div>
			<?php } ?>
		<?php } ?>
		<br>

		<form action="insert_act.php" method="post" enctype="multipart/form-data">
			<div class="mb-3">
				<label class="form-label">Nama Lengkap</label>
				<input type="text" name="nama_lengkap" class="form-control">
			</div>
			<div class="mb-3">
				<label class="form-label">Kelas</label>
				<input type="text" name="kelas" class="form-control">
			</div>
			<div class="mb-3">
				<label class="form-label">Alamat</label>
				<textarea class="form-control" name="alamat" rows="3"></textarea>
			</div>
			<div class="mb-3">
				<label class="form-label">Pas Foto</label>
				<input type="file" name="pas_foto" class="form-control">
			</div>
			<div class="mb-3">
				<button class="btn btn-success" type="submit"><img src="https://fontmeme.com/permalink/230112/bcf53a471544d122d96d35ce50a06902.png" alt=""></button>
				<a href="index.php" class="btn btn-danger"><img src="https://fontmeme.com/permalink/230112/c2eb84a891274325819b0eca268a4a08.png" alt=""></a>
			</div>
		</form>
		
	</div>
</body>
</html>