<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Contoh URL</title>
</head>

<body>
	<h1>Contoh URL</h1>
	<p>
		base_url:
		<br>
		<?= base_url() ?>
	</p>
	<p>
		site_url:
		<br>
		<a href="<?= site_url('halaman') ?>">Ke halaman view</a>
	</p>
	<p>
		Gambar:
		<br>
		<img src="<?= base_url('assets/icon.png') ?>" width="200">
	</p>
	<p><?=anchor('url/detail/1', 'Ke halaman detail.')?></p>
	<p><?=anchor('url/blank', 'Ke halaman blank.')?></p>
</body>

</html>
