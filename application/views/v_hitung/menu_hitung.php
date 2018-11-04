<!DOCTYPE html>
<html>
<head>
	<title>Welcome to codeigniter</title>
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
	<h1>Selamat datang di menu perhitungan</h1>
	<p>Silahkan pilih menu dibawah ini</p>

	<ul>
		<li><?php echo anchor('c_hitung/hitung/perkalian','perkalian'); ?></li>
		<li><?php echo anchor('c_hitung/hitung/pembagian','pembagian');?></li>
	</ul>
</body>
</html>