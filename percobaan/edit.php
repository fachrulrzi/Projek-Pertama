<?php 
include "db.php";
 $query= "UPDATE siswa SET nama_lengkap = 'raffi' WHERE no=14";

 // jalankan query
 $result = $dbh->query($query);

 // tampilkan hasil proses query
 echo $result->rowCount()." data berhasil diedit";

?>