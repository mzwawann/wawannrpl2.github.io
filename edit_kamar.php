<!DOCTYPE html>
<html>
    <head>
        <title>Edit kamar</title>
        <link rel="stylesheet" type="text/css" href="input_edit.css">
    </head>

    <body>
        <div class="main">
            <div class="navbar">
            <label class="ttl">edit data kamar</label>
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
                $id_kamar= $_GET['id'];
                $data = mysqli_query($koneksi,"SELECT * FROM kamar WHERE id_kamar='$id_kamar'");
                while($tampil=mysqli_fetch_array($data)){
            ?>

                <div class="frm">
                    <form method="post" action="edit_aksi_kamar.php">
                        <table>
                            <tr>
                                <td>id kamar</td>
                                <td><input type="number" name="id_kamar" value="<?php echo $tampil['id_kamar']; ?>"></td>
                            </tr>
                            <tr>
                                <td>jenis kamar</td>
                                <td><input type="text" name="jenis_kamar" value="<?php echo $tampil['jenis_kamar']; ?>"></td>
                            </tr>
                            <tr>
                                <td>status</td>
                                <td><input type="text" name="status" value="<?php echo $tampil['status']; ?>"></td>
                            </tr>
                            <tr>
                                <td>harga</td>
                                <td><input type="number" name="harga" value="<?php echo $tampil['harga']; ?>"></td>
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