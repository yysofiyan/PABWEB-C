<h3>Tambah Data</h3>

<?php echo $form_open ?>
<p>
    <?php echo $label_email ?>
    <?php echo $input_email ?>
</p>
<p>
    <?php echo $label_password ?>
    <?php echo $input_password ?>
</p>
<p>
    <?php
    $pesan = $this->session->flashdata('pesan');
    echo $pesan;
    ?>
</p>
    <?php echo $submit ?>
    <?php echo $form_close ?>