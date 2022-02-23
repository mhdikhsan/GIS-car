<?php
try {
	$connect = new PDO("mysql:host=localhost;dbname=gis6b", "root", "");
} catch (PDOException $ex) {
	echo 'Koneksi gagal, hubungi Administrator Sistem.';
	exit();
}
?>