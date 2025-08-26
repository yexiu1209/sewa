<?php
include("koneksi.php");
$jenis = $_POST['nama_jenis'];
$keterangan = $_POST['keterangan'];
$sql = "INSERT INTO jenis_barang (nama_jenis, keterangan) VALUES ('$jenis', '$keterangan')";
$query = mysqli_query($koneksi, $sql);
header("location:index.php");
?>