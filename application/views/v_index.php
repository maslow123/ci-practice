<!DOCTYPE html>
<html>
	<head>
		<meta charset = "UTF -8">
		<title>Belajar membuat template sederhana dengan Code Igniter</title>
		<link rel="stylesheet" href=" <?php echo base_url(); ?> v_style.css">

	</head>
<body>
	<div id="wrapper">
			<header>
				<hgroup>
						<h1>Welcome to our website</h1>
						<h3>Membuat template sederhana dengan codeigniter</h3>
				</hgroup>
				<nav>
					<ul>
						<li><a href="<?php echo base_url(). 'web.php' ?>">Home</a></li>
						<li><a href="<?php echo base_url(). 'about.php'?>">About</a></li>
					</ul>
				</nav>
				<div class="clear"></div>
			</header>
			<section>
				<h1><?php echo $judul ?></h1>
				<p>
					Ini adalah contoh website dengan menggunakan framework codeigniter ,
					belajar codeigniter memang tidak sulit (saya juga tidak bilang gampang) 
					yang jelas dengan pantang menyerah dalam belajar inshaallah hasil tidak
					akan menghianati proses (:
				</p>
				<p>
					Ini adalah contoh website dengan menggunakan framework codeigniter ,
					belajar codeigniter memang tidak sulit (saya juga tidak bilang gampang) 
					yang jelas dengan pantang menyerah dalam belajar inshaallah hasil tidak
					akan menghianati proses (:
				</p>
			</section>
			<footer>
				<a href="https://www.malasngoding.com">Untuk referensi belajar silahkan klik link ini</a>
			</footer>
	</div>
</body>
</html>