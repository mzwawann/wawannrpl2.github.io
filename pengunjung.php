<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Table data pengunjung</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="main_style.css">
    </head>

    <body>
        <div class="main">
            <div class="navbar">
                    <label class="ttl">pengunjung</label>
                    <ul>
                        <li><a href="home.php">home</a></li>
                        <li><a href="kamar.php">kamar</a></li>
                        <li><a href="karyawan.php">karyawan</a></li>
                        <li><a href="">pengunjung</a></li>
                        <li><a href="reservasi.php">reservasi</a></li>
                    </ul>
                </div>
                <div class="btn">
                    <a href="input_pengunjung.php"><button class="btn input">+ Tambahkan data pengunjung</button></a>
            </div>
                <table>
                    <tr>
                        <th>id pengunjung</th>
                        <th>id kamar</th>
                        <th>nik</th>
                        <th>alamat</th>
                        <th>waktu check-in</th>
                        <th>waktu check-out</th>
                        <th>aksi</th>
                    </tr>

                <?php
                    include "koneksi.php";
                $data=mysqli_query($koneksi,"select * from pengunjung");
                while($tampil=mysqli_fetch_array($data)){
                    ?>

                    <tr>
                        <td> <?php echo $tampil['id_pengunjung'] ?> </td>
                        <td> <?php echo $tampil['id_kamar'] ?></td>
                        <td> <?php echo $tampil['nik'] ?></td>
                        <td> <?php echo $tampil['alamat'] ?></td>
                        <td> <?php echo $tampil['waktu_check_in'] ?></td>
                        <td> <?php echo $tampil['waktu_check_out'] ?></td>
                        <td> <a href = "hapus_pengunjung.php?id=<?php echo $tampil['id_pengunjung']; ?>";><button>hapus</button></a>
                            <a href = "edit_pengunjung.php?id=<?php echo $tampil['id_pengunjung']; ?>";><button>edit</button></a></td> 
                    </tr>
                    <?php
                }
                ?>
                </table>
        </div>
    </body>
</html>