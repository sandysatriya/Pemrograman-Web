<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$NPM 				= $_POST['npm'];
$Nama 				= $_POST['nama'];
$Kelas 				= $_POST['kelas'];
$jenis_kelamin 		= $_POST['jenis_kelamin'];
$Bahasa_Keahlian 	= $_POST['bahasa_keahlian'];
$Tingkat 			= $_POST['tingkat'];
$Alasan 			= $_POST['alasan'];
// query SQL untuk insert data
$query="INSERT INTO user VALUES('$NPM','$Nama','$Kelas','$jenis_kelamin','$Bahasa_Keahlian','$Tingkat','$Alasan')";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
header("location:daftarmhs.php");
?>