<!DOCTYPE html>
<html>
<head>
	<title>perkalian</title>
	<style type="text/css">
		body{
			background: #fff;
			margin : 40px;
			font-family: Lucide Grande,Verdana,Sans-serif;
			font-size:14px;
			color:#4F5155;
		}
		a{
			color:#003399;
			background:transparent;
			font-weight: normal;
		}
		h1{
			color:#444;
			background:transparent;
			border-bottom: 1px solid #d0d0d0;
			font-size:14px;
			font-weight: bold;
			margin:24 0 2px 0;
			padding:5px 0 6px 0;
		}
	</style>
</head>
<body>
	<h1>Selamat datang di menu pembagian</h1>
	<?php echo validation_errors();?>
	<p>Silahkan masukan data berikut !!</p>

	<?php echo form_open('c_hitung/hitung/pembagian');?>
		<?php echo form_input('angka1',$angka1);?> /
		<?php echo form_input('angka2',$angka2);?><br/>

		<?php echo form_submit('submit','Hitung !!');?>
	<?php echo form_close();?><br/>

	Hasil : <?php echo $hasil;?>
	<p><br/>
	Pergi kemenu <?php echo anchor('c_hitung/hitung/perkalian','Perkalian');?> ?

</body>
</html>