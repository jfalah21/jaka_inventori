<?php
include "../config/koneksi.php";

$username =$_POST['username'];
$password =$_POST['password'];
$nama =$_POST['nama_lengkap'];


$login = mysqli_query($con, "SELECT * FROM tb_user where username='$username' AND password='$password'");
$ketemu= mysqli_num_rows($login);
$r=mysqli_fetch_array($login);

if ($ketemu >0) {
    session_start();

    $_SESSION[username] =$r[username];
    $_SESSION[nama_lengkap] =$r[nama_lengkap];
    $_SESSION[password] =$r[password];

    $id_lama= session_id();
    session_regenerate_id();
    $sid_baru= session_id();

echo"<script>alert('Selamat Datang $_SESSION[nama_lengkap]');
window.location= 'content.php'<script>";
header('location:content.php');
}else{
    echo "<script> alert('Login Gagal')
window.location=index.php</script>";
header('location:index.php');
}
?>
