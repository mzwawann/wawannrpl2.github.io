<!DOCTYPE html>
<html>
    <head>
        <title>Tambahkan data kamar</title>
        <link rel="stylesheet" type="text/css" href="input_edit.css">
    </head>

    <body>
        <div class="main">
            <div class="navbar">
                <label class="ttl">tambahkan data kamar</label>
                    <ul>
                        <li><a href="home.php">home</a></li>
                        <li><a href="kamar.php">kamar</a></li>
                        <li><a href="karyawan.php">karyawan</a></li>
                        <li><a href="pengunjung.php">pengunjung</a></li>
                        <li><a href="reservasi.php">reservasi</a></li>
                    </ul>
            </div>
            <div class="frm">
                <form method="post" action="input_aksi_kamar.php">
                    <table>
                        <tr>
                            <td>id kamar</td>
                            <td><input type="number" name="kamar"></td>
                        </tr>
                        <tr>
                            <td>jenis kamar</td>
                            <td><input type="text" name="jenis_kamar"></td>
                        </tr>
                        <tr>
                            <td>status</td>
                            <td><input type="text" name="status"></td>
                        </tr>
                        <tr>
                            <td>harga</td>
                            <td><input type="number" name="harga"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><button input type="submit">simpan</button></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </body>
</html>