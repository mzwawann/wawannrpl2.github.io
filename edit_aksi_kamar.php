<?php
include "koneksi.php";

$id_kamar = $_POST['id_kamar'];
$jenis = $_POST['jenis_kamar'];
$status = $_POST['status'];
$harga = $_POST['harga'];

mysqli_query ($koneksi, "UPDATE kamar SET id_kamar='$id_kamar' , jenis_kamar='$jenis' , status='$status' , harga='$harga' WHERE id_kamar='$id_kamar'");
header("location:kamar.php");
?>