<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   
    <h2><center>Daftar Mahasiswa</center></h2>
    <table border="1" class="tabel_tampil">
        <tr id="tabel_header">
            <th>No</th>
            <th>Kode Mahasiswa</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Jurusan</th>
            <th>Alamat</th>
            <th>Opsi</th>
        </tr>

        <?php
        include "koneksi.php";
        $no = 1;
        $mahasiswa = mysqli_query($koneksi, "select * from form_mahasiswa");
        while($d = mysqli_fetch_array($mahasiswa)){
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['kode_mahasiswa']; ?></td>
                <td><?php echo $d['nama']; ?></td>
                <td><?php echo $d['nim']; ?></td>
                <td><?php echo $d['jurusan']; ?></td>
                <td><?php echo $d['alamat']; ?></td>
                <td>
                    <a href="update.php?id=<?php echo $d['kode_mahasiswa']; ?>">UPDATE</a>
                    <a href="delete.php?id= <?php echo $d['kode_mahasiswa']; ?>">DELETE</a>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>

    <h3><center>Tekan untuk menambahkan mahasiswa</center></h3>
    <center><a href="hal_utama.php" class="button">+ Mahasiswa</a></center>
</body>
</html>