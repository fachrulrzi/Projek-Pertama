<?php 
include "db.php";
 $query= "DELETE FROM siswa WHERE no=14";

 // jalankan query
 $result = $dbh->query($query);

 // tampilkan hasil proses query
 echo $result->rowCount()." data berhasil hapus";

?>