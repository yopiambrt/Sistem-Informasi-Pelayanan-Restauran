<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</title>
</head>
<body>

<center><?php echo anchor('menu/tambah','Tambah Data'); ?></center>
	<table style="margin:20px auto;" border="1">
		<tr>
			
			<th>email</th>
			<th>nama</th>
			<th>tgl_pesan</th>
			<th>menu</th>
			<th>metode</th>
			<th>keterangan</th>
			<th>opsi</th>
		</tr>
		<?php 
	
		foreach($query as $u){ 
		?>
		<tr>
			<td><?php echo $u->email ?></td>
			<td><?php echo $u->nama ?></td>
			<td><?php echo $u->tgl_pesan ?></td>
			<td><?php echo $u->menu ?></td>
			<td><?php echo $u->metode ?></td>
			<td><?php echo $u->keterangan ?></td>
			<td>
			      <?php echo anchor('menu/edit/'.$u->id,'Edit'); ?>
                              <?php echo anchor('menu/hapus/'.$u->id,'Hapus'); ?>
			</td>
		</tr>
		<?php } ?>
	</table>

</body>
</html>