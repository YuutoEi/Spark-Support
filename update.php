<?php
include 'connection.php';

//menangkap data dari edit.php
$id = $_POST['id'];
$kegiatan = $_POST['kegiatan'];
$cek = $_POST['cek'];

//update ke database
mysqli_query($koneksi, "UPDATE `list` SET `kegiatan`='$kegiatan',`cek`='$cek' WHERE id=$id");

header("location:index.php");



?>