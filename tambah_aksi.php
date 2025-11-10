<?php
include "koneksi.php";

    $kode_mahasiswa = $_POST['kode_mahasiswa'];
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $jurusan = $_POST['jurusan'];
    $alamat = $_POST['alamat'];

    mysqli_query($koneksi, "insert into form_mahasiswa (kode_mahasiswa, nama, nim, jurusan, alamat) 
    values('$kode_mahasiswa', '$nama', $nim, '$jurusan', '$alamat')");

    header("location:index.php");
?>