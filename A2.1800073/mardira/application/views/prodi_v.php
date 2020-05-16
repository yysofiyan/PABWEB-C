<h3>Data Program Studi</h3>
<table border="2">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Prodi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        foreach ($prodi as $row) { ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $row->nama_prodi ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<?php echo anchor('home', 'kemabli ke home') ?>