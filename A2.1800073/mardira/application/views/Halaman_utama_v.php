<h1>Menu Utama</1h>
<ul>
    <li>
        <?php echo anchor('mhs', 'Data Mahasiswa') ?></li>
    <li>
    <li>   
        <?php echo anchor('prodi', 'Data Program Studi') ?>
    </li>
</ul>
<p><?= 'Selamat Datang' . $this->session->userdata('nama_lengkap') ?></p>
<p><?= anchor('auth/hapus_session', 'Hapus Session Nama Lengkap') ?></p>
    <?php echo anchor('logout','Logout') ?>