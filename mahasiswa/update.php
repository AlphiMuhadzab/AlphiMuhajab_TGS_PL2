<?php 
 
include '../koneksi.php';
$id = $_POST['id'];
$NPM = $_POST['npm'];
$nama = $_POST['nama'];

$query="UPDATE tb_mahasiswa SET NPM='$NPM', Nama='$nama' WHERE id='$id'";
mysqli_query($koneksi, $query);
header("location:../latihan1.php");