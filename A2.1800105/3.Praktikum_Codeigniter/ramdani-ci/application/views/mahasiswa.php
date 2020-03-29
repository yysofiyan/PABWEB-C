<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Mahasiswa</title>
</head>

<body>
	<h3>Data Mahasiswa</h3>
	<?= anchor('mahasiswa/tambah_data', 'Tambah Data') ?>
	<p><?= $this->session->flashdata('pesan') ?></p>
	<table border="2">
		<thead>
			<tr>
				<th>No.</th>
				<th>NIM</th>
				<th>Nama</th>
				<th>Program Studi</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<?php
			$no = 1;
			foreach ($mahasiswa as $row) { ?>
				<tr>
					<th><?= $no++ ?></th>
					<th><?= $row->NIM ?></th>
					<th><?= $row->nama_mhs ?></th>
					<th><?= $row->nama_prodi ?></th>
					<td>
						<?=anchor("mahasiswa/edit/$row->id_mahasiswa", 'Edit')?>
						<?=anchor("mahasiswa/hapus/$row->id_mahasiswa", 'Hapus')?>
					</td>
				</tr>
			<?php
			} ?>
		</tbody>
	</table>
	<?= anchor('home', 'Kembali ke home') ?>
</body>

</html>
