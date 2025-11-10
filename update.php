<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css"> 
</head>
<body>
    <h2>Update Data Mahasiswa</h2>

    <?php
    include "koneksi.php";
    $kode_mahasiswa = $_GET['id'];
    $data = mysqli_query($koneksi, "select * from form_mahasiswa where kode_mahasiswa='$kode_mahasiswa'");
    
    while($d = mysqli_fetch_array($data)){
        ?>
            <form method="post" action="ubah.php" id="update">
                <table>
                    <tr>
                        <td>Kode Mahasiswa</td>
                        <td>
                            <input type="hidden" name="kode_mahasiswa" value="<?php echo $d['kode_mahasiswa']; ?>">
                            <input type="text" name="kode_mahasiswa" value="<?php echo $d['kode_mahasiswa']; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td><input type="text" name="nama" value="<?php echo $d['nama']; ?>"></td>
                    </tr>
                    <tr>
                        <td>NIM</td>
                        <td><input type="number" name="nim" value="<?php echo $d['nim']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Jurusan</td>
                        <td><input type="text" name="jurusan" value="<?php echo $d['jurusan']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td><input type="text" name="alamat" value="<?php echo $d['alamat']; ?>"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" value="SIMPAN" class="tombol"></td>
                    </tr>
                </table>
            </form>
            <?php
        }
    ?>

    <br>
    <br>
    <center><h3>Tekan untuk kembali</h3></center>
    <center><a href="index.php" class="back">Kembali</a></center>
</body>
</html>