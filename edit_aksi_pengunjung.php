<?php
include "koneksi.php";

$id_pengunjung = $_POST['id_pengunjung'];
$id_kamar = $_POST['id_kamar'];
$nik = $_POST['nik'];
$alamat = $_POST['alamat'];
$waktu_check_in = $_POST['waktu_check_in'];
$waktu_check_out = $_POST['waktu_check_out'];

mysqli_query ($koneksi, "UPDATE pengunjung SET id_pengunjung='$id_pengunjung' , id_kamar='$id_kamar' , nik='$nik' , alamat='$alamat' , waktu_check_in='$waktu_check_in' , waktu_check_out='$waktu_check_out' WHERE id_pengunjung='$id_pengunjung'");
header("location:pengunjung.php");
?>