<?php
include "koneksi.php" ;
$username = $_POST['username'];
$telepon = $_POST['telepon'];
$email = $_POST['email'];
$password = $_POST['password'];
$peran = $_POST['peran'];
$alamat = $_POST['alamat'];
$query= "INSERT INTO user (username, telepon, email, password, peran, alamat) values ('$username', '$telepon', '$email', '$password', '$peran', '$alamat')";

 // jalankan query
 $result = $db->query($query);
header('location:../index.php?pesan=input');
?>