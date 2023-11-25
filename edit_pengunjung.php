<!DOCTYPE html>
<html>
    <head>
        <title>Edit pengunjung</title>
        <link rel="stylesheet" type="text/css" href="input_edit.css">
    </head>

    <body>
        <div class="main">
            <div class="navbar">
                <label class="ttl">edit data pengunjung</label>
                    <ul>
                        <li><a href="home.php">home</a></li>
                        <li><a href="kamar.php">kamar</a></li>
                        <li><a href="karyawan.php">karyawan</a></li>
                        <li><a href="pengunjung.php">pengunjung</a></li>
                        <li><a href="reservasi.php">reservasi</a></li>
                    </ul>
            </div>

        <?php
        include 'koneksi.php';
        $id_pengunjung= $_GET['id'];
        $data = mysqli_query($koneksi,"SELECT * FROM pengunjung WHERE id_pengunjung='$id_pengunjung'");
        while($tampil=mysqli_fetch_array($data)){
        ?>
        <div class="frm">
        <form method="post" action="edit_aksi_pengunjung.php">
        <table>
            <tr>
                <td>id pengunjung</td>
                <td><input type="number" name="id_pengunjung" value="<?php echo $tampil['id_pengunjung']; ?>"></td>
            </tr>
            <tr>
                <td>id kamar</td>
                <td><input type="number" name="id_kamar" value="<?php echo $tampil['id_kamar']; ?>"></td>
            </tr>
            <tr>
                <td>nik</td>
                <td><input type="number" name="nik" value="<?php echo $tampil['nik']; ?>"></td>
            </tr>
            <tr>
                <td>alamat</td>
                <td><input type="text" name="alamat" value="<?php echo $tampil['alamat']; ?>"></td>
            </tr>
            <tr>
                <td>waktu check-in</td>
                <td><input type="date" name="waktu_check_in" value="<?php echo $tampil['waktu_check_in']; ?>"></td>
            </tr>
            <tr>
                <td>waktu check-out</td>
                <td><input type="date" name="waktu_check_out" value="<?php echo $tampil['waktu_check_out']; ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><button input type="submit">simpan</button></td>        
            </tr>
        </table>
        </form>
        </div>

        <?php
        }
        ?>
        </div>
    </body>
</html>