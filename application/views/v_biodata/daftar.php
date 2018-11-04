<!DOCTYPE html>
<html>
<head>
	<title>Hasil</title>
	<link rel="stylesheet" href="<?php echo base_url()?>style/gaya.css">
</head>
<body>
	<h1>Selamat datang di form pendaftaran</h1>
	<p>Silahkan isi data kamu </p>

	<?php echo "<b>".validation_errors()."</b>";?>
	<?php echo form_open('c_biodata/formulir/');?>

	<table>
		<tr>
			<td>Nis</td>
			<td>:</td>
			<td><input type="text" name="nis"></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><textarea name="alamat"></textarea></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><input type="submit" name="kirim" value="Kirim"> <input type="reset" value="Reset"></td>
		</tr>
	</table>
	</form>
	<?php echo form_close();?>
</body>
</html>