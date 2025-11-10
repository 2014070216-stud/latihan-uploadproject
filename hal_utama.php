<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Siswa SMAK Petra 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1><center>Form Mahasiswa</center></h1>
    <br>
    <br>
    <center><h2>Tambah Mahasiswa</h2></center>

    <form method="POST" action="tambah_aksi.php" id="form_utama">
        <table>
            <tr>
                <td>Kode Mahasiswa</td>
                <td><input type="text" name="kode_mahasiswa"></td>
            </tr>

            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>

            <tr>
                <td>NIM</td>
                <td><input type="number" name="nim"></td>
            </tr>

            <tr>
                <td>Jurusan</td>
                <td><input type="text" name="jurusan"></td>
            </tr>

            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>

            <tr>
                <td></td>
                <td><input type="submit" value="simpan" class="tombol"></td>
            </tr>
        </table>
    </form>
    <br>
    <br>
    
    <h3><center>Tekan untuk kembali ke tampilan tabel</center></h3>
    <center><a href="index.php" class="button">KEMBALI</a></center>
</body>
</html>