<!DOCTYPE html>
<html>

<head>
    <title>Halaman Admin</title>
    <link href="<?= base_url() ?>assets/css/bootstrap.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-light bg-light">
        <span class="navbar-brand mb-0 h1">
            <h1>Login berhasil !</h1>
            <h2>Hai, <?php echo $this->session->userdata("nama"); ?></h2>
        </span>
    </nav>
    <a href="<?php echo base_url('index.php'); ?>" style="text-align: right">Logout</a>
</body>

</html>