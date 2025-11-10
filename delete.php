<?php
include "koneksi.php";

$kode = $_GET['id'];

mysqli_query($koneksi, "DELETE from form_mahasiswa where kode_mahasiswa='$kode'");

header("location: index.php");
?> 