<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title;?></title>
</head>
<body>
	<h1><?php echo $heading;?></h1>
	<?php foreach($list as $d): ?>
			<li><?php echo $d;?></li>
	<?php endforeach;?>
</body>
</html>