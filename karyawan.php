<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Table data karyawan</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="main_style.css">
    </head>

    <body>
        <div class="main">
            <div class="navbar">
                    <label class="ttl">karyawan</label>
                    <ul>
                        <li><a href="home.php">home</a></li>
                        <li><a href="kamar.php">kamar</a></li>
                        <li><a href="">karyawan</a></li>
                        <li><a href="pengunjung.php">pengunjung</a></li>
                        <li><a href="reservasi.php">reservasi</a></li>
                    </ul>
            </div>
            <div class="btn">
                <a href="input_karyawan.php"><button class="btn input">+ Tambahkan data karyawan</button></a>
            </div>
                <table>
                    <tr>
                        <th>id karyawan</th>
                        <th>nama karyawan</th>
                        <th>jenis kelamin</th>
                        <th>alamat</th>
                        <th>telp</th>
                        <th>aksi</th>
                    </tr>

                <?php
                    include "koneksi.php";
                $data=mysqli_query($koneksi,"select * from karyawan");
                while($tampil=mysqli_fetch_array($data)){
                    ?>

                    <tr>
                        <td> <?php echo $tampil['id_karyawan'] ?> </td>
                        <td> <?php echo $tampil['nama'] ?></td>
                        <td> <?php echo $tampil['jenis_kelamin'] ?></td>
                        <td> <?php echo $tampil['alamat'] ?></td>
                        <td> <?php echo $tampil['telp'] ?></td>
                        <td> <a href = "hapus_karyawan.php?id=<?php echo $tampil['id_karyawan']; ?>";><button>hapus</button></a>
                            <a href = "edit_karyawan.php?id=<?php echo $tampil['id_karyawan']; ?>"><button>edit</button></a></td>
                    </tr>
                    <?php
                }
                ?>
            </table>
        </div>
    </body>
</html>