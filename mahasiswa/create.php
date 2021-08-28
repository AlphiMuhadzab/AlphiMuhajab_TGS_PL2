<?php
include '../koneksi.php';
$npm            = $_POST['npm'];
$nama           = $_POST['nama'];
$query="INSERT INTO tb_mahasiswa SET NPM='$npm', Nama='$nama'";
mysqli_query($koneksi, $query);
header("location:../latihan1.php");
?>