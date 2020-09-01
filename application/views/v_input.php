<!DOCTYPE html>
<html>

<head>
    <title>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</title>
    <link href="<?= base_url() ?>assets/css/bootstrap.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/BootSideMenu.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/leaflet/leaflet.css" rel="stylesheet">
</head>

<body>
    <center>
        <h1>Form Input untuk penambahan data</h1>
    </center>
    <form action="<?php echo base_url() . 'crud/tambah_aksi'; ?>" method="post">
        <table style="margin:20px auto;">
            <tr>
                <td>Nama Bangunan</td>
                <td><input type="text" name="bangunan_nama"></td>
            </tr>
            <tr>
                <td>Koordinat X</td>
                <td><input type="text" name="bangunan_long"></td>
            </tr>
            <tr>
                <td>Koordinat Y</td>
                <td><input type="text" name="bangunan_lat"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Tambah"></td>
            </tr>
        </table>
    </form>
</body>

</html>