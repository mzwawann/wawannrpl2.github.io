<?php
include "koneksi.php";

$id_karyawan = $_POST['id_karyawan'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$telp = $_POST['telp'];

mysqli_query ($koneksi, "UPDATE karyawan SET id_karyawan='$id_karyawan' , nama='$nama' , jenis_kelamin='$jenis_kelamin' , alamat='$alamat' , telp='$telp' WHERE id_karyawan='$id_karyawan'");
header("location:karyawan.php");
?>