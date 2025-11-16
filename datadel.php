<?php
include 'koneksiform.php';

    $kode = $_GET['kode'];

    mysqli_query($koneksif, "DELETE FROM mahasiswa WHERE kode='$kode'");

    header("location:index.php");
?>
