<!DOCTYPE html>
<html>

<head>
    <title>Halaman User</title>
    <link href="<?= base_url() ?>assets/css/bootstrap.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/BootSideMenu.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/leaflet/leaflet.css" rel="stylesheet">
</head>

<body>
    <center>
        <h1>Data Bangunan</h1>
        <div style="text-align: right">
            <h3 class="btn btn-light"> <a href="crud/tambah">Tambah</a></h3>
        </div>

        <table border="1" class="table">
            <thead class="thead-dark">
                <tr>
                    <th>Nama Bangunan</th>
                    <th>Koordinat X</th>
                    <th>Koordinat Y</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <?php foreach ($bangunan as $u) { ?>
                <tr>
                    <td><?php echo $u->bangunan_nama ?></td>
                    <td><?php echo $u->bangunan_long ?></td>
                    <td><?php echo $u->bangunan_lat ?></td>
                    <td>
                        <?php echo anchor('crud/edit/' . $u->bangunan_id, 'Edit') ?>
                        <?php echo anchor('crud/hapus/' . $u->bangunan_id, 'Hapus') ?>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </center>
    <center>
</body>

</html>