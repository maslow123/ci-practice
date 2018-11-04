<!DOCTYPE html>
<html>
<head>
	<title>CRUD DENGAN CODEIGNITER</title>
</head>
<body>
	<div class="judul">
		<blink><marquee><?php echo $hai; ?></marquee></blink>
	</div>
	<center><?php echo anchor('c_crud/crud/tambah','Tambah data !');?><br/></br>
	<!-- table -->
	<table border="1">
		<tr>
			<th>Id</th>
			<th>Nama</th>
			<th>Kelas</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		<?php foreach($siswa as $data):?>
			<tr>
				<td><?php echo $data['id'];?></td>
				<td><?php echo $data['name'];?></td>
				<td><?php echo $data['kelas'];?></td>
				<td><?php echo $data['Alamat'];?></td>
				<td>
					<?php echo anchor('c_crud/crud/edit/'.$data['id'],'Edit');?> |
					<?php echo anchor('c_crud/crud/hapus/'.$data['id'],'Hapus');?>
				</td>
			</tr>
		<?php endforeach;?>
	</table>

</body>
</html>