<?php 
include 'db.php';
	$query = $dbh->query("SELECT * FROM user");
	$row = $query->fetchAll();
	foreach ($row as $d) {
		echo $d['username'] . "<br>";
		echo $d['alamat'] . "<br>";
		echo $d['telepon'] . "<br>";
		echo $d['email'] . "<br>";
		echo '========================= <br>';
	}

?>