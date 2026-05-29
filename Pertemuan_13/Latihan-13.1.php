<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Data Mahasiswa</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f5f5f5;
        }

        .container {
            width: 500px;
            margin: 50px auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
            color: orange;
            margin-bottom: 30px;
        }

        table {
            width: 100%;
        }

        td {
            padding: 10px;
        }

        input, select {
            width: 100%;
            padding: 8px;
        }

        .btn {
            padding: 8px 15px;
            border: none;
            cursor: pointer;
        }

        .submit {
            background: #4CAF50;
            color: white;
            font-weight: bold; 
            border-radius: 30px;
        }

        .cancel {
            background: #f44336;
            color: white;
            font-weight: bold; 
            border-radius: 30px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Form Input Data Mahasiswa</h2>

    <form action="proses-13.1.php" method="POST">
        <table>
            <tr>
                <td>ID Mahasiswa / NIM</td>
                <td><input type="text" name="nim" required></td>
            </tr>

            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" required></td>
            </tr>

            <tr>
                <td>Jurusan</td>
                <td>
                    <select name="jurusan" required>
                        <option value="">- Pilih Jurusan -</option>
                        <option value="Teknik Informatika">Teknik Informatika</option>
                        <option value="Sistem Informasi">Sistem Informasi</option>
                        <option value="Teknik Komputer">Ilmu Komunikasi</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" required></td>
            </tr>

            <tr>
                <td>No. Telp</td>
                <td><input type="text" name="telp" required></td>
            </tr>

            <tr>
                <td></td>
                <td>
                    <button type="submit" class="btn submit">Submit</button>
                    <button type="reset" class="btn cancel">Cancel</button>
                </td>
            </tr>
        </table>
    </form>
</div>

</body>
</html>