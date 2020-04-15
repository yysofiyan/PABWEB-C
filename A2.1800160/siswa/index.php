<?php
require_once('config/database.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Aplikasi Pengelolaan Data Siswa dengan PHP 7, MySQLi, dan Bootstrap4">
    <meta name="author" content="Ramdani Surya Manggala">

    <link rel="shortcut icon" href="assets/img/MX-Menu-icon-pyramids.svg" type="image/x-icon">
    <link rel="stylesheet" href="assets/plugins/bootstrap-4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/plugins/datepicker/css/datepicker.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome-free-5.4.2-web/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <title>yogi mahendra </title>
</head>

<body>
    <div class="container-fluid">
        <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
            <a href="/">
                <h5 class="my-0 mr-md-auto font-weight-normal">
                    <i class="fas fa-user title-icon"></i> Data Siswa
                </h5>
            </a>
        </div>
    </div>

    <div class="container-fluid">
        <?php
        if (empty($_GET['page'])) {
            include 'tampil_data.php';
        } else if ($_GET['page'] == 'tambah') {
            include 'form_tambah.php';
        } else if ($_GET['page'] == 'ubah') {
            include 'form_ubah.php';
        }
        ?>
    </div>

    <div class="container-fluid">
        <footer class="pt-4 my-md-4 pt-md-3 border-top">
            <div class="row">
                <div class="col-12 col-md center">
                    &copy; 2020 - <a class="text-info" href="https://stmik-sumedang.ac.id/">❤STMIK Sumedang</a>
                </div>
            </div>
        </footer>
    </div>

    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/plugins/bootstrap-4.1.3/js/bootstrap.min.js"></script>
    <script src="assets/plugins/fontawesome-free-5.4.2-web/js/all.min.js"></script>
    <script src="assets/plugins/datepicker/js/bootstrap-datepicker.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.date-picker').datepicker({
                autoclose: true,
                todayHighlight: true
            });
        });

        // Validasi form input tidak boleh kosong
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply customBootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();

        // Validasi karakter yang boleh diinpukan pada form
        function getkey(e) {
            if (window.event)
                return window.event.keyCode;
            else if (e)
                return e.which;
            else
                return null;
        }

        function goodchars(e, goods, field) {
            var key, keychar;
            key = getkey(e);

            if (key == null) return true;

            keychar = String.fromCharCode(key);
            keychar = keychar.toLowerCase();
            goods = goods.toLowerCase();

            // checkgoodkeys
            if (goods.indexOf(keychar) != -1) return true;
            // controlkeys
            if (key == null || key == 0 || key == 8 || key == 9 || key == 27) return true;

            if (key == 13) {
                var i;

                for (i = 0; i < field.form.elements.length; i++)
                    if (field == field.form.elements[i]) break;

                i = (i + 1) % field.form.elements.length;

                field.form.elements[i].focus();

                return false;
            };
            // else return false
            return false;
        }

        // validasi image dan preview image sebelum upload
        function validasiFile() {
            varfileInput = document.getElementById('foto');
            varfilePath = fileInput.value;
            varfileSize = $('#foto')[0].files[0].size;
            // tentukan extension yangdiperbolehkan
            var allowedExtensions = /(\.jpg|\.jpeg|\.png)$/i;
            // Jika tipe file yang diupload tidak sesuai dengan allowedExtensions, tampilkan pesan:
            if (!allowedExtensions.exec(filePath)) {
                alert('Tipe file foto tidak sesuai. Harap unggah file foto yang memiliki tipe *.jpg atau *.png');
                fileInput.value = '';
                document.getElementById('imagePreview').innerHTML =
                    '<img class="foto-preview" src="foto/img/MX-Menu-icon-pyramids.svg"/>';

                return false;
            }
            // jika ukuran file yang diupload lebih dari sama dengan 1Mb
            else if (fileSize >= 1000000) {
                alert('Ukuran file foto lebih dari 1 Mb. Harap unggah file foto yang memiliki ukuran maksimal 1Mb.');
                fileInput.value = '';
                document.getElementById('imagePreview').innerHTML =
                    '<img class="foto-preview" src="foto/img/MX-Menu-icon-pyramids.svg"/>';

                return false;
            }
            // selain itu
            else {
                // Image preview
                if (fileInput.files && fileInput.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        document.getElementById('imagePreview').innerHTML = '<img class="foto-preview" src="' + e.target.result + '"/>';
                    }

                    reader.readAsDataURL(fileInput.files[0]);
                }
            }
        }
    </script>

</body>

</html>