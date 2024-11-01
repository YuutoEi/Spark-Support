<?php
include 'connection.php';

//Menangkap data yang dikirim
$name = $_POST['name'];
$email = $_POST['email'];
$jenjang_pendidikan = $_POST['jenjang_pendidikan'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$kepuasan = $_POST['kepuasan'];
$kepuasan1 = $_POST['kepuasan1'];
$kepuasan2 = $_POST['kepuasan2'];
$kepuasan3 = $_POST['kepuasan3'];
$kepuasan4 = $_POST['kepuasan4'];
$saran = $_POST['saran'];



//input ke data base
mysqli_query($koneksi, "insert into support VALUES ('', '$name','$email','$jenjang_pendidikan','$jenis_kelamin','$kepuasan','$kepuasan1','$kepuasan1','$kepuasan2','$kepuasan3','$kepuasan4','$saran');");

//kembali ke index.php
header("location:index.php");


?>