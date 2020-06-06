<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Mardira</title>
</head>

<body>
	<h1>Menu Utama</h1>
	<ul>
		<li><?= anchor('mhs', 'Data Mahasiswa') ?></li>
		<li><?= anchor('prodi', 'Data Program Studi') ?></li>
	</ul>
	<p><?= 'Selamat datang ' . $this->session->userdata('nama_lengkap') ?></p>
	<p><?= anchor('auth/hapus_session', 'Hapus session nama') ?></p>
	<?= anchor('logout', 'Logout') ?>
</body>

</html>
