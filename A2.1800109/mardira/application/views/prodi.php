<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Program Studi</title>
</head>

<body>
	<h3>Data Program Studi</h3>
	<table border="2">
		<thead>
			<tr>
				<th>No.</th>
				<th>Nama Program Studi</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$no = 1;
			foreach ($prodi as $row) { ?>
				<tr>
					<th><?= $no++ ?></th>
					<th><?= $row->nama_prodi ?></th>
				</tr>
			<?php
			} ?>
		</tbody>
	</table>
	<?= anchor('home', 'Kembali ke home') ?>
</body>

</html>
