<!DOCTYPE html>
<html>
<head>
	<title>Tambah data</title>
</head>
<body>
	<h3>Tambah data baru</h3>

	<form action="<?php echo base_url().'c_crud/crud/tambah_aksi';?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Kelas</td>
				<td>:</td>
				<td><input type="text" name="kelas"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" value="Tambah"></td>
			</tr>
		</table>
	</form>
</body>
</html>