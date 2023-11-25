<?php
include "koneksi.php";

$id_reservasi = $_POST['id_reservasi'];
$id_pengunjung = $_POST['id_pengunjung'];
$nama_pengunjung = $_POST['nama_pengunjung'];
$id_kamar = $_POST['id_kamar'];
$waktu_check_in = $_POST['waktu_check_in'];
$waktu_check_out = $_POST['waktu_check_out'];
$id_karyawan = $_POST['id_karyawan'];

mysqli_query ($koneksi, "UPDATE reservasi SET id_reservasi='$id_reservasi' , id_pengunjung='$id_pengunjung' , nama_pengunjung='$nama_pengunjung' , id_kamar='$id_kamar' , waktu_check_in='$waktu_check_in' , waktu_check_out='$waktu_check_out' , id_karyawan='$id_karyawan' WHERE id_reservasi='$id_reservasi'");
header("location:reservasi.php");
?>