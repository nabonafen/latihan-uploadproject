<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="style.css">

</head>
<br>
<a href="isiform.php">Isi Formulir</a>
<br><br>
    <table border="1">
        <tr>
            <th>Kode</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Jurusan</th>
            <th>Alamat</th>
            <th>Delete</th>
            <th>Update</th>
        </tr>

        <?php
        include 'koneksiform.php';
        $formulir = mysqli_query($koneksif, "SELECT * FROM mahasiswa");
        while($f = mysqli_fetch_array($formulir)){
        ?>
            <tr>
                <td><?php echo $f['kode']; ?></td>
                <td><?php echo $f['nama']; ?></td>
                <td><?php echo $f['nim']; ?></td>
                <td><?php echo $f['jurusan']; ?></td>
                <td><?php echo $f['alamat']; ?></td>
                <td><a href="datadel.php?kode=<?php echo $f['kode']; ?>">ㅤㅤㅤ</a>
                <td><a href="dataupd.php?kode=<?php echo $f['kode']; ?>">ㅤㅤㅤ</a>
</td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>
