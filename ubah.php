<?php
include "koneksi.php";

$kode_mahasiswa = $_POST['kode_mahasiswa'];
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$jurusan = $_POST['jurusan'];
$alamat = $_POST['alamat'];

mysqli_query($koneksi, "update form_mahasiswa set nama= '$nama', nim= '$nim', jurusan= '$jurusan', alamat= '$alamat' where kode_mahasiswa= '$kode_mahasiswa'");

header("location:index.php");
?>