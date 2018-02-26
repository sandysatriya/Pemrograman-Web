<?php
include 'koneksi.php';
// menyimpan data id kedalam variabel
$id_mahasiswa   = $_GET['NPM'];
// query SQL untuk insert data
$query="DELETE from user where id_mahasiswa='$NPM'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
header("location:daftarmhs.php");
?>