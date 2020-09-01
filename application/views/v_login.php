<html>

<head>
    <title>Halaman Login</title>
    <link href="<?= base_url() ?>assets/css/bootstrap.css" rel="stylesheet">
</head>

<body>
    <center>
        <h1>Login</h1>
        <form class="form-group" action="<?php echo base_url('login/aksi_login'); ?>" method="post">
            <div>
                <table>
                    <tr>
                        <td>Username</td>
                        <td><input type="text" class="form-control" name="username"></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="password" class="form-control" name="password"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input class="btn btn-primary" type="submit" value="Login"></td>
                    </tr>
                </table>
        </form>
    </center>
</body>

</html>