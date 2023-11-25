<!DOCTYPE html>
<html>
    <head>
        <title>Edit karyawan</title>
        <link rel="stylesheet" type="text/css" href="input_edit.css">
    </head>

    <body>
        <div class="main">
            <div class="navbar">
            <label class="ttl">edit data karyawan</label>
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
        $id_karyawan= $_GET['id'];
        $data = mysqli_query($koneksi,"SELECT * FROM karyawan WHERE id_karyawan='$id_karyawan'");
        while($tampil=mysqli_fetch_array($data)){
        ?>
        <div class="frm">
        <form method="post" action="edit_aksi_karyawan.php">
        <table>
            <tr>
                <td>id karyawan</td>
                <td><input type="number" name="id_karyawan" value="<?php echo $tampil['id_karyawan']; ?>"></td>
            </tr>
            <tr>
                <td>nama</td>
                <td><input type="text" name="nama" value="<?php echo $tampil['nama']; ?>"></td>
            </tr>
            <tr>
                <td>jenis kelamin</td>
                <td><input type="text" name="jenis_kelamin" value="<?php echo $tampil['jenis_kelamin']; ?>"></td>
            </tr>
            <tr>
                <td>alamat</td>
                <td><input type="text" name="alamat" value="<?php echo $tampil['alamat']; ?>"></td>
            </tr>
            <tr>
                <td>telp</td>
                <td><input type="number" name="telp" value="<?php echo $tampil['telp']; ?>"></td>
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