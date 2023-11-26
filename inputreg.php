<?php

include 'koneksi.php';

$repassword=$_POST['repassword'];
$username = $_POST['username'];
 $password = $_POST['password'];
    
if ($password==$repassword) {
    $konek = mysqli_query($connect, "INSERT INTO users
    VALUES('', '$username', '$password')") or die (mysqli_error($connect));
    header("location:login.php");
}
else {
    header("location:register.php?pesan=gagal");
}