<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Table data reservasi</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="main_style.css">
    </head>

    <body>
        <div class="main">
            <div class="navbar">
                <label class="ttl">reservasi</label>
                <ul>
                    <li><a href="home.php">home</a></li>
                     <li><a href="kamar.php">kamar</a></li>
                    <li><a href="karyawan.php">karyawan</a></li>
                     <li><a href="pengunjung.php">pengunjung</a></li>
                    <li><a href="">reservasi</a></li>
                </ul>
            </div>
                <div class="btn">
                    <a href="input_reservasi.php"><button class="btn input">+ Tambahkan data reservasi</button></a>
            </div>
                <table>
                    <tr>
                        <th>id reservasi</th>
                        <th>id pengunjung</th>
                        <th>nama pengunjung</th>
                        <th>id kamar</th>
                        <th>waktu check-in</th>
                        <th>waktu check-out</th>
                        <th>id karyawan</th>
                        <th>aksi</th>
                    </tr>

                <?php
                    include "koneksi.php";
                $data=mysqli_query($koneksi,"select * from reservasi");
                while($tampil=mysqli_fetch_array($data)){
                    ?>

                    <tr>
                        <td> <?php echo $tampil['id_reservasi'] ?> </td>
                        <td> <?php echo $tampil['id_pengunjung'] ?></td>
                        <td> <?php echo $tampil['nama_pengunjung'] ?></td>
                        <td> <?php echo $tampil['id_kamar'] ?></td>
                        <td> <?php echo $tampil['waktu_check_in'] ?></td>
                        <td> <?php echo $tampil['waktu_check_out'] ?></td>
                        <td> <?php echo $tampil['id_karyawan'] ?></td>
                        <td> <a href = "hapus_reservasi.php?id=<?php echo $tampil['id_reservasi']; ?>";><button>hapus</button></a>
                            <a href = "edit_reservasi.php?id=<?php echo $tampil['id_reservasi']; ?>"><button>edit</button></a></td>
                    </tr>
                    <?php
                }
                ?>
                </table>
        </div>
    </body>
</html>