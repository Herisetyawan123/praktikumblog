<?php

// konfigurasi database
$host = "localhost";
$user = "root";
$pass = "";
$db = "praktikumblog";

// melakukan koneksi ke db
$koneksi = mysqli_connect($host, $user, $pass, $db);

if(!$koneksi){
	echo "Connect is failed : " . die(mysqli_error($koneksi));
}
