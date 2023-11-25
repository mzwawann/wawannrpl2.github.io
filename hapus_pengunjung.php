<?php
include 'koneksi.php';

$id= $_GET['id'];
mysqli_query($koneksi,"delete from pengunjung where id_pengunjung='$id'");

header("location:pengunjung.php");
?>