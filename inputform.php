<!DOCTYPE html>
<html>
<head>
    <title>Input Data Mahasiswa</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <style>
        body {
            font-family: Poppins;
            text-align: center;
            background-color: #f0f0f0;
            }
            
        h1 {
            margin-top: 20px;
        }

        form {
            width: 300px;
            margin: 0 auto;
            padding: 60px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0px 0px 5px 0px #888;
        }

        label {
            display: block;
            text-align: left;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body>

        <h1>Input Data Mahasiswa</h1>
        <form method="post" action="<?php echo base_url('index.php/contoh1/process_data'); ?>">
            <label for="nim">NIM:</label>
            <input type="text" name="nim" required><br>
            <br>
            <label for="nama">Nama:</label>
            <input type="text" name="nama" required><br>
            <br>
            <label for="alamat">Alamat:</label>
            <textarea name="alamat" required></textarea><br>
            <br>
            <label for="hobbi">Hobbi:</label>
            <input type="text" name="hobbi" required><br>
            <br>
            <input type="submit" value="Submit">
        </form>

</body>
</html>
