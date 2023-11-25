<!DOCTYPE html>
<html>
    <head>
        <title>Tambahkan data karyawan</title>
        <link rel="stylesheet" type="text/css" href="input_edit.css">
    </head>

    <body>
        <div class="main">
            <div class="navbar">
                <label class="ttl">tambahkan data karyawan</label>
                    <ul>
                        <li><a href="home.php">home</a></li>
                        <li><a href="kamar.php">kamar</a></li>
                        <li><a href="karyawan.php">karyawan</a></li>
                        <li><a href="pengunjung.php">pengunjung</a></li>
                        <li><a href="reservasi.php">reservasi</a></li>
                    </ul>
            </div>
            <div class="frm">
                <form method="post" action="input_aksi_karyawan.php">
                    <table>
                        <tr>
                            <td>id karyawan</td>
                            <td><input type="number" name="karyawan"></td>
                        </tr>
                        <tr>
                            <td>nama</td>
                            <td><input type="text" name="nama"></td>
                        </tr>
                        <tr>
                            <td>jenis kelamin</td>
                            <td><input type="text" name="kelamin"></td>
                        </tr>
                        <tr>
                            <td>alamat</td>
                            <td><input type="text" name="alamat"></td>
                        </tr>
                        <tr>
                            <td>telp</td>
                            <td><input type="number" name="telp"></td>
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