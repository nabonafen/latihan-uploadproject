<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
     <h2>Update Form Data</h2>
    <br/>
    <a href="index.php">KEMBALI</a>
    <br/>
    <br/>
    <h3>EDIT DATA</h3>

    <?php
    include 'koneksiform.php';
    $kode = $_GET['kode'];
    $data = mysqli_query($koneksif, "SELECT * FROM mahasiswa WHERE kode='$kode'");
    while($f = mysqli_fetch_array($data)){
    ?>
    <form method="post" action="datachange.php">
        <table>
            <tr>
                <td>Kode/Nama</td>
                <td>
                    <input type="text" name="kode" value="<?php echo $f['kode']; ?>">
                    <input type="text" name="nama" value="<?php echo $f['nama']; ?>">
                </td>
            </tr>
            <tr>
                <td>NIM</td>
                <td>
                    <input type="number" name="nim" value="<?php echo $f['nim']; ?>">
                </td>
            </tr>
            <td>Jurusan</td>
                <td>
                    <input type="text" name="jurusan" value="<?php echo $f['jurusan']; ?>">
                </td>
            <tr>
                <td>Alamat</td>
                <td>
                    <input type="text" name="alamat" value="<?php echo $f['alamat']; ?>">
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="SIMPAN"></td>
            </tr>
        </table>
    </form>
    <?php
    }
    ?>
</body>
</html>