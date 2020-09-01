<!DOCTYPE html>
<html>

<head>
</head>

<body>
    <center>
        <h3>Edit Data</h3>
    </center>
    <form action="<?php echo base_url() . 'crud/update'; ?>" method="post">
        <table style="margin:20px auto;">
            <input type="hidden" name="bangunan_id" id="bangunan_id" value="<?php echo $bangunan->bangunan_id ?>">

            <tr>
                <td>Nama Bangunan</td>
                <td>
                    <input type="text" name="bangunan_nama" value="<?php echo $bangunan->bangunan_nama ?>">
                </td>
            </tr>
            <tr>
                <td>Koordinat X</td>
                <td><input type="text" name="bangunan_long" value="<?php echo $bangunan->bangunan_long ?>"></td>
            </tr>
            <tr>
                <td>Koordinat Y</td>
                <td><input type="text" name="bangunan_lat" value="<?php echo $bangunan->bangunan_lat ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>
</body>

</html>