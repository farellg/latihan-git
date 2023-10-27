<html>
    <head>
        <title>Form Input Matakuliah</title>
        <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
</head>
<style>
    body {
        font-family: Poppins;
    }

    form {
        width: 350px;
        padding: 20px;
        margin: 0, auto;
        margin-top: 20px;
        background-color: #fff;
        box-shadow: 0px 0px 5px 0px #888;
        border-radius: 5px;
    }

    input[type="submit"] {
        background-color: #4CAF50;
        color: #fff;
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
        <form action="<?= base_url('index.php/matakuliah/cetak'); ?>" method="post">
            <table>
                <tr>
                    <th colspan="3">
                        Form Input Data Mata Kuliah
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
                        <input type="text" name="kode" id="kode">
                    </td>
                </tr>
                <tr>
                    <th class="left-align">Nama MTK</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="nama" id="nama">
                    </td>
                </tr>
                <tr>
                    <th class="left-align">SKS</th>
                    <th>:</th>
                    <td>
                        <select name="sks" id="sks">
                            <option value="">Pilih SKS</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                    </td>
                </tr>   
                <tr>
                    <td colspan="3" align="center">
                        <input type="submit" value="Submit">
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>

</html>