<?php
include 'koneksi.php';

$id_karyawan = $_POST['karyawan'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['kelamin'];
$alamat = $_POST['alamat'];
$telp = $_POST['telp'];

mysqli_query($koneksi, "insert into karyawan values('$id_karyawan','$nama','$jenis_kelamin','$alamat','$telp')");
header("location:karyawan.php");

?>