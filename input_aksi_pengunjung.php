<?php
include 'koneksi.php';

$id_pengunjung = $_POST['id_pengunjung'];
$id_kamar = $_POST['id_kamar'];
$nik = $_POST['nik'];
$alamat = $_POST['alamat'];
$waktu_check_in = $_POST['waktu_check_in'];
$waktu_check_out = $_POST['waktu_check_out'];

mysqli_query($koneksi, "insert into pengunjung values('$id_pengunjung','$id_kamar','$nik','$alamat','$waktu_check_in','$waktu_check_out')");
header("location:pengunjung.php");

?>