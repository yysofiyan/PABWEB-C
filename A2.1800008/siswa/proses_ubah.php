<?php
// panggil file database.php untuk koneksi ke database
require_once "config/database.php";
// jika tombol simpan diklik
if ( isset($_POST['simpan']) ) {
    if ( isset($_POST['nis']) ) {
        // ambil data hasil submit dari form
        $nis           = mysqli_real_escape_string($db, trim($_POST['nis']));
        $nama          = mysqli_real_escape_string($db,trim($_POST['nama']));
        $tempat_lahir  = mysqli_real_escape_string($db, trim($_POST['tempat_lahir']));
        $tanggal_lahir = mysqli_real_escape_string($db,trim(date('Y-m-d',strtotime($_POST['tanggal_lahir']))));
        $jenis_kelamin = mysqli_real_escape_string($db, trim($_POST['jenis_kelamin']));
        $agama         = mysqli_real_escape_string($db,trim($_POST['agama']));
        $alamat        = mysqli_real_escape_string($db,trim($_POST['alamat']));
        $no_hp         = mysqli_real_escape_string($db, trim($_POST['no_hp']));
        $nama_file     = $_FILES['foto']['name'];
        $tmp_file      = $_FILES['foto']['tmp_name'];
        $path          = "foto/".$nama_file;
        $foto_lama     = mysqli_real_escape_string($db, trim($_POST['foto_lama']));

        // jika foto tidak diubah
        if ( empty($nama_file) ) {
            // perintah query untuk mengubah data pada tabel siswa
            $update = mysqli_query($db, "UPDATE tbl_siswa
                                            SET   nama          = '$nama',
                                                tempat_lahir  = '$tempat_lahir',
                                                tanggal_lahir = '$tanggal_lahir',
                                                jenis_kelamin = '$jenis_kelamin',
                                                agama         = '$agama',
                                                alamat        = '$alamat',
                                                no_hp         = '$no_hp'
                                            WHERE nis           = '$nis'")
                        or die(mysqli_error($db));
            // cek query
            if ($update) {
                // jika berhasil tampilkan pesan berhasil ubah data
                header("location:index.php?alert=2");
            }
        }
        // jika foto diubah
        else{
            // uploadfile
            if(move_uploaded_file($tmp_file, $path)) {
                // Jika file berhasil diupload, Lakukan:
                // hapus file foto lama dari folder foto
                $hapus_file = unlink("foto/$foto_lama");
                // perintah query untuk mengubah data pada tabel siswa
                $update = mysqli_query($db, "UPDATE tbl_siswa
                                                SET   nama          = '$nama',
                                                      tempat_lahir  = '$tempat_lahir',
                                                      tanggal_lahir = '$tanggal_lahir',
                                                      jenis_kelamin = '$jenis_kelamin',
                                                      agama         = '$agama',
                                                      alamat        = '$alamat',
                                                      no_hp         = '$no_hp',
                                                      foto          = '$nama_file'
                                                WHERE nis           = '$nis'")
                            or die(mysqli_error($db));
                // cekquery
                if ($update){
                    // jika berhasil tampilkan pesan berhasil ubahdata
                    header("location:index.php?alert=2");
                }
            }
        }
    }
}
// tutup koneksi
mysqli_close($db);
?>
