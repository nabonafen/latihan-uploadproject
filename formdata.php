<?php
include 'koneksiform.php';

$kode   = $_POST['kode'];
$nama   = $_POST['nama'];
$nim   = $_POST['nim'];
$jurusan = $_POST['jurusan'];
$alamat = $_POST['alamat'];

mysqli_query($koneksif, "INSERT INTO mahasiswa VALUES('$kode','$nama','$nim','$jurusan','$alamat')");

header("location:index.php");
?>
