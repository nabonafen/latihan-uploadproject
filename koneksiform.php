<?php

$koneksif = mysqli_connect("localhost","root","mysql","formulir");

echo "Koneksi Berhasil";

if (mysqli_connect_error()){
    echo "Koneksi database gagal : " . mysqli_connect_error();
}

?>