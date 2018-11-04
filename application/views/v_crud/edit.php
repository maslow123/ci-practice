<!DOCTYPE html>
<html>
<head>
	<title>Ubah data siswa</title>
</head>
<body>
	<h1>Ubah data siswa!</h1>
	<form action="<?php echo base_url().'c_crud/crud/update';?>" method="post">
		<table style="border-collapse: collapse;">
			<?php foreach($siswa as $d):?>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="hidden" name="id" value="<?php echo $d['id'];?>">
					<input type="text" name="nama" value="<?php echo $d['name'];?>">
				</td>
			</tr>
			<tr>
				<td>Kelas</td>
				<td>:</td>
				<td><input type='text' name="kelas" value="<?php echo $d['kelas'];?>"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><textarea name="alamat"><?php echo $d['Alamat'];?></textarea></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" value="Kirim"></td>
			</tr>
		<?php endforeach;?>
		</table>
	</form>
</body>
</html>