<?php 

if (isset($_GET['action'])) {
	if ($_GET['action'] == "tambah") {
		include "tambah_menu.php";
	}elseif($_GET['action'] == "hapus"){
		include 'hapus_menu.php';
	}
}else{
	include "data_menu.php";
}

 ?>