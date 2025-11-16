<?php
include 'koneksiform.php';

$kode = $_POST['kode'];
$nama     = $_POST['nama'];
$nim     = $_POST['nim'];
$jurusan = $_POST['jurusan'];
$alamat   = $_POST['alamat'];

mysqli_query($koneksif, "UPDATE mahasiswa SET nama='$nama', nim='$nim', jurusan='$jurusan', alamat='$alamat' WHERE kode='$kode'");

header("location:index.php");
?>

