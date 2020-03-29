<h3>Tambah Data</h3>
<p><?= form_open('mahasiswa/tambah_aksi')?></p>

<?php
foreach ($forms as $form) { ?>
	<p>
		<?= $form['form_label'] ?>
		<?= $form['form_input'] ?>
	</p>
<?php } ?>

<p><?= form_submit('submit', 'Simpan')?></p>
<?=form_close()?>
