<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include '../config/config.php';
 
// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];
 
// menyeleksi data admin dengan username dan password yang sesuai
mysqli_query($mysqli, "INSERT into admin VALUES('','$username','$password')");

$data = mysqli_query($mysqli,"select * from admin where username='$username' and password='$password'");
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
 
if($cek > 0){
	header("location:../index.php?pesan=berhasil");
}else{
	header("location:register.php?pesan=gagal");
}
?>