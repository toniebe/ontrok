<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</title>
</head>
<body>
	<center><h1>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</h1></center>
	<center><?php echo anchor('crud/tambah','Tambah Data'); ?></center>
	<table style="margin:20px auto;" border="1">
		<tr>
			<th>No</th>
			<th>Nama</th>
		</tr>
		<?php
		$t1 = $this->db->list_tables();
		foreach($t1 as $rf1)
		{
				?>
				<option value="<?=$rf1;?>"><?=ucwords($rf1);?></option>
				<?php
		}
		?>
	</table>
</body>
</html>
