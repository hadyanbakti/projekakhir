<?php
session_start();
include 'koneksi.php';

$username=$_POST['username'];
$password=$_POST['password'];

$data=mysqli_query($connect, "SELECT * FROM users WHERE username='$username' AND password='$password'")or die (mysqli_error($connect));
$cek=mysqli_num_rows($data);

if($cek > 0){
$_SESSION['username']= $username;
$_SESSION['status']= "login";
header("location:index.php");
}else{
    header("location:login.php?pesan=gagal");
}
?>