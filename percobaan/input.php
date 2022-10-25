<?php 
include "db.php";
 $query= "INSERT INTO siswa (jurusan,nis,nisn,nama_lengkap,jenis_kelamin) values ('rpl', 2020, 123, 'arul', 'laki')";

 // jalankan query
 $result = $dbh->query($query);

 // tampilkan hasil proses query
 echo $result->rowCount()." data berhasil ditambahkan";

?>