<?php
include 'koneksi.php';

$id_kamar = $_POST['kamar'];
$jenis_kamar = $_POST['jenis_kamar'];
$status = $_POST['status'];
$harga = $_POST['harga'];

mysqli_query($koneksi, "insert into kamar values('$id_kamar','$jenis_kamar','$status','$harga')");
header("location:kamar.php");

?>