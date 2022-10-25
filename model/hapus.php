<?php 
include("koneksi.php") ;
$id = $_GET['id_produk'];
$query ="DELETE FROM produk Where id_produk=$id";

$result = $db->query($query);
// mysqli_query($db,$query);
header('location:../view/layout2/product_admin.php?pesan=berhasil');
?>