<h1>Halaman Utama</h1>
<ul>
	<li>
		<?php echo anchor('mahasiswa', 'Data Mahasiswa') ?>
	</li>
	<li>
		<?php echo anchor('prodi', 'Data Program Studi') ?>
	</li>
</ul>
<p><?= 'Selamat datang ' . $this->session->userdata('nama_lengkap') ?></p>
<p><?= anchor('auth/hapus_session', 'Hapus Session Nama Lengkap') ?></p>
<?= anchor('logout', 'Logout') ?>