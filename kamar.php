<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Table data kamar</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="main_style.css">
    </head>

    <body>
        <div class="main">
            <div class="navbar">
                <label class="ttl">kamar</label>
                <ul>
                    <li><a href="home.php">home</a></li>
                    <li><a href="">kamar</a></li>
                    <li><a href="karyawan.php">karyawan</a></li>
                    <li><a href="pengunjung.php">pengunjung</a></li>
                    <li><a href="reservasi.php">reservasi</a></li>
                </ul>
            </div>
            <div class="btn">
                <a href="input_kamar.php"><button class="btn input">+ Tambahkan data kamar</button></a>
            </div>
                <table>
                    <tr>
                        <th>id kamar</th>
                        <th>jenis kamar</th>
                        <th>status</th>
                        <th>harga</th>
                        <th>aksi</th>
                    </tr>
                <?php
                    include "koneksi.php";
                $data=mysqli_query($koneksi,"select * from kamar");
                while($tampil=mysqli_fetch_array($data)){
                    ?>

                    <tr>
                        <td> <?php echo $tampil['id_kamar'] ?> </td>
                        <td> <?php echo $tampil['jenis_kamar'] ?></td>
                        <td> <?php echo $tampil['status'] ?></td>
                        <td> <?php echo $tampil['harga'] ?></td>
                        <td> <a href="hapus_kamar.php?id=<?php echo $tampil['id_kamar']; ?>"><button>hapus</button></a>
                            <a href = "edit_kamar.php?id=<?php echo $tampil['id_kamar']; ?>"><button>edit</button></a></td>
                    </tr>
                    <?php
                }
                ?>
            </table>
        </div>
    </body>
</html>