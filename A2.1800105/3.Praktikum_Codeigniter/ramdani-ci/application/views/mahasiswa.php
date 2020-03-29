<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Mahasiswa</title>
</head>
<body>
	<?=anchor('mahasiswa/tambah_data', 'Tambah Data')?>
	<h3>Data Mahasiswa</h3>
	<table border="2">
		<thead>
			<tr>
				<th>No.</th>
				<th>NIM</th>
				<th>Nama</th>
				<th>Program Studi</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$no = 1;
			foreach ($mahasiswa as $row) { ?>
				<tr>
					<th><?=$no++?></th>
					<th><?=$row->NIM?></th>
					<th><?=$row->nama_mhs?></th>
					<th><?=$row->nama_prodi?></th>
				</tr>
			<?php
			} ?>
		</tbody>
	</table>
	<?=anchor('home', 'Kembali ke home')?>
</body>
</html>
