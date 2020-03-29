<h3>Tambah Data</h3>
<p><?= $form_open ?></p>
<?php
foreach ($forms as $form) { ?>
	<p>
		<?= $form['form_label'] ?>
		<?= $form['form_input'] ?>
		<?= $form['form_error'] ?>
	</p>
<?php } ?>

<p><?= form_submit('submit', 'Simpan') ?></p>
<?= form_close() ?>
