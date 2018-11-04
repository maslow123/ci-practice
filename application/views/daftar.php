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
		<h1 align="center">Pendaftaran siswa</h1>
		<p>Silahkan masukkan data-data anda dengan benar</p>
		<table>			
			<?php 
				echo validation_errors();
				echo form_open('pendaftaran/daftar');
				?>
			<tr>
				<td>NIS</td>
				<td>:</td>
				<td><?php echo form_input('nis','');?></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><?php echo form_input('nama','');?></td>
			</tr>
			<tr>
				<td>Jurusan</td>
				<td>:</td>
				<td><?php echo form_input('jurusan','');?></td>
			</tr>
			<tr>
				<td>Tempat Tanggal Lahir</td>
				<td>:</td>
				<td><?php echo form_input('ttl','');?></td>
			</tr>
			<tr>
				<td>No Telepon</td>
				<td>:</td>
				<td><?php echo form_input('telepon','');?></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td></td>
				<td><?php echo form_submit('btn','Kirim');?></td>
			</tr>
			<?php echo form_close();?>
			
	</table>
</body>