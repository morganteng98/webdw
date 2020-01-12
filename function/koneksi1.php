<?php
$servername = "localhost";
$username = "root";
$password = "";
$databasename = "belajar";

$koneksi = mysqli_connect($servername, $username, $password, $databasename);

if (!$koneksi){
	echo "error: ". mysqli_connect_error();
	exit();
}

?>