<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Halaman Login</title>
</head>

<body>
	<h1>Halaman Login</h1>
	<?= form_open('auth/cek_login'); ?>
	<p><?=$this->session->flashdata('pesan')?></p>
	<?php
	foreach ($forms as $form) { ?>
		<p>
			<?= $form['form_label'] ?>
			<?= $form['form_input'] ?>
		</p>
	<?php } ?>

	<p><?= form_submit('login', 'Submit') ?></p>
	<?= form_close() ?>
</body>

</html>
