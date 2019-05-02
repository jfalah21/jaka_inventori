<?php
include "../config/koneksi.php";

$nama_barang= $_POST['nama_barang'];
$kd_barang= $_POST['kd_barang'];
$keterangan= $_POST['keterangan'];
$jumlah=$_POST['jumlah'];
$foto=$_POST['foto'];

mysqli_query($con, "INSERT INTO tb_barang values('$kd_barang','$nama_barang', '$keterangan', '$jumlah', '$foto')");

header("location:content.php");
?>