<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Output</title>
    <style>
        fieldset {
            width: 18%;
            margin: 20px auto;
            border-radius: 5px;
        }

        select {
            width: 100%;
        }
        a {
            text-decoration: none;
        }
    </style>
</head>
<body>
    <!-- <?php echo validation_errors(); ?> -->

    <fieldset>
        <legend>Output Transaksi</legend>

            <table>
                <tr>
                    <th>Nama Pembeli</th>
                    <td>:</td>
                    <td>
                        <?= $nama; ?>
                    </td>
                </tr>

                <tr>
                    <th>Nomor HP</th>
                    <td>:</td>
                    <td>
                        <?= $nhp; ?>
                    </td>
                </tr>

                <tr>
                    <th>Merk sepatu</th>
                    <td>:</td>
                    <td>
                        <?= $merk; ?>
                    </td>
                </tr>

                <tr>
                    <th>Ukuran sepatu</th>
                    <td>:</td>
                    <td>
                        <?= $ukuran; ?>
                    </td>
                </tr>

                <tr>
                    <th>Harga</th>
                    <td>:</td>
                    <td>
                        <?= $harga; ?>
                    </td>
                </tr>

                <tr>
                    <td colspan="3" align="center">
                        <hr>
                        <a href="<?php base_url('review'); ?>">Kembali</a>
                    </td>
                </tr>
            </table>
    </fieldset>
</body>
</html>