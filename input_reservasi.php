<!DOCTYPE html>
<html>
    <head>
        <title>Tambahkan data reservasi</title>
        <link rel="stylesheet" type="text/css" href="input_edit.css">
    </head>

    <body>
        <div class="main">
            <div class="navbar">
                <label class="ttl">tambahkan data reservasi</label>
                    <ul>
                        <li><a href="home.php">home</a></li>
                        <li><a href="kamar.php">kamar</a></li>
                        <li><a href="karyawan.php">karyawan</a></li>
                        <li><a href="pengunjung.php">pengunjung</a></li>
                        <li><a href="reservasi.php">reservasi</a></li>
                    </ul>
            </div>
            <div class="frm">
                <form method="post" action="input_aksi_reservasi.php">
                    <table>
                        <tr>
                            <td>id reservasi</td>
                            <td><input type="text" name="id_reservasi"></td>
                        </tr>
                        <tr>
                            <td>id pengunjung</td>
                            <td><input type="number" name="id_pengunjung"></td>
                        </tr>
                        <tr>
                            <td>nama pengunjung</td>
                            <td><input type="text" name="nama_pengunjung"></td>
                        </tr>
                        <tr>
                            <td>id kamar</td>
                            <td><input type="number" name="id_kamar"></td>
                        </tr>
                        <tr>
                            <td>waktu check-in</td>
                            <td><input type="date" name="waktu_check_in"></td>
                        </tr>
                        <tr>
                            <td>waktu check-out</td>
                            <td><input type="date" name="waktu_check_out"></td>
                        </tr>
                        <tr>
                            <td>id karyawan</td>
                            <td><input type="number" name="id_karyawan"></td>
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