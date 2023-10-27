<html>
    <head>
        <title>Tampil Data Matakuliah</title>
        <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    </head>
    <style>
        body {
            font-family: Poppins;
        }

        table {
            width: 350px;
            padding: 20px;
            margin: 0, auto;
            margin-top: 20px;
            background-color: #fff;
            box-shadow: 0px 0px 5px 0px #888;
            border-radius: 5px;
        }

        td a {
            text-decoration: none;
            display: inline-block;
            background-color: #4CAF50;
            color: #fff;
            margin-top: 5px;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .left-align {
            text-align: left;
        }

    </style>
        <body>
            <center>
                <table>
                    <tr>
                        <th colspan="3">
                            Tampil Data Mata Kuliah
                        </th>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <hr>
                        </td>
                    </tr>
                    <tr>
                        <th class="left-align">Kode MTK</th>
                        <th>:</th>
                        <td>
                            <?= $kode; ?>
                        </td>
                    </tr>
                    <tr>
                        <th class="left-align">Nama MTK</th>
                        <th>:</th>
                        <td>
                            <?= $nama; ?>
                        </td>
                    </tr>
                    <tr>
                        <th class="left-align">SKS</th>
                        <th>:</th>
                        <td>
                            <?= $sks; ?>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3" align="center">
                            <a href="<?= base_url('index.php/matakuliah'); ?>">kembali</a>
                        </td>
                    </tr>
                </table>
            </center>
        </body>
</html>