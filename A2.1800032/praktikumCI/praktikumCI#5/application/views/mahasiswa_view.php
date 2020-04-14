<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data Mahasiswa</title>
</head>
<body>
    <?php echo anchor('mahasiswa/tambah_data', 'Tambah Data') ?>
<table border="2">
     <thead>
      <tr>
        <th>NO</th>
        <th>NIM</th>
        <th>Nama Mahasiswa</th>
        <th>Program Studi</th>
      </tr>
     </thead>
     </tbody>
        <?php
        $no = 1;
        foreach ($mahasiswa as $row) { ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $row->NIM ?></td>
                <td><?php echo $row->nama_mhs ?></td>
                <td><?php echo $row->nama_prodi ?></td>
            </tr>
        <?php } ?>
    </tbody>
    </table>
</body>
</html>