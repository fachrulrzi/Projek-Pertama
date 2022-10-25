<?php
include("koneksi.php") ;
$id = $_GET['id_produk'];
$query = $db->query("SELECT * FROM produk WHERE id_produk='$id'");
$data = $query->fetchAll();
foreach ($data as $d):
$nama_produk= $d['nama_produk'];
$harga_produk=$d['harga_produk'];
$merek_produk=$d['merek_produk'];
$nama_penerima = ucwords($_POST['nama_penerima']) ;
$kuantitas=$_POST['kuantitas'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];
$email = $_POST['email'];
$query= "INSERT INTO pemesan (nama_penerima, telepon,alamat, email, nama_produk, harga_produk, kuantitas ) values ('$nama_penerima', '$telepon', '$alamat', '$email', '$nama_produk', '$harga_produk', '$kuantitas')";

$total_harga =$kuantitas*$harga_produk;
$total_harga =number_format($total_harga, 0,',','.');
$harga_produk = number_format($harga_produk, 0,',','.');
//  jalankan query
 $result = $db->query($query);
    
header("location:https://api.whatsapp.com/send?phone=6285884653526&text=%2APemesanan%20Produk%20Toko%20D%27RAZKA%2A%0A============================================================%0A%2ANama%20Produk%20:%2A%0A$nama_produk%0A%2AMerek%20Produk%20:%2A%20$merek_produk%0A%2AJumlah%20Produk%20:%2A%20$kuantitas%0A%2AHarga%20Produk%20:%2A%20Rp$harga_produk%0A%2ATotal%20Harga%20:%2A%20Rp$total_harga%0A============================================================%0A%2APenerima%20:%2A%0A$nama_penerima%0A%2ATelepon%20:%2A%0A$telepon%0A%2AAlamat%20:%2A%0A$alamat%0A");
endforeach;
?>