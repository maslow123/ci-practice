<!DOCTYPE html>
<html>
	<head>
		<title>Welcome to pembagian CodeIgniter</title>
		
		<style type="text/css">
			body{
				background-color:#fff;
				margin:40px;
				font-family:"Lucida Grande","Verdana","Sans-serif";
				font-size:14px;
				color:#4F5155;
			}
			a{
				color:#003399;
				background-color:transparent;
				font-weight:normal;
			}
			h1{
				color:#444;
				background-color:transparent;
				border-bottom:1px solid #d0d0d0;
				font-size:16px;
				font-weight:bold;
				margin : 0px; 0 2px 0px;
				padding: 5px 0 6px 0;
			}
		</style>
	</head>
	<body>
		<h1 align="center">Isi data siswa</h1>
		<p>Berikut merupakan isi dari data siswa :</p><br/>
		<?php echo validation_errors();?>
		<?php
			if(isset($_POST['btn'])){
				$nis = $_POST['nis'];
				$nama = $_POST['nama'];
				$jurusan = $_POST['jurusan'];
				$ttl = $_POST['ttl'];
				$telepon = $_POST['telepon'];
			?>
			<table>
				<tr>
					<td>NIS</td>
					<td>:</td>
					<td><?php echo $nis;?></td><br/>
				</tr>
				<tr>
					<td>Nama</td>
					<td>:</td>
					<td><?php echo $nama;?></td><br/>
				</tr>
				<tr>
					<td>Jurusan</td>
					<td>:</td>
					<td><?php echo $jurusan;?></td><br/>
				</tr>
				<tr>
					<td>Tempat Tanggal Lahir</td>
					<td>:</td>
					<td><?php echo $ttl;?></td><br/>
				</tr>
				<tr>
					<td>No.Telepon</td>
					<td>:</td>
					<td><?php echo $telepon;?></td><br/>
				</tr>
			</table>
			<?php }?>
			<?php echo anchor('pendaftaran/daftar','Kembali');?>
	</body>
</html>