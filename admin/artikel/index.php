<?php 

if (isset($_GET['action'])) {
	if ($_GET['action'] == "edit") {
		include "edit_artikel.php";
	}elseif ($_GET['action'] == "hapus") {
		include 'hapus_artikel.php';
	}else if($_GET['action'] == "tambah"){
		include 'tambah_artikel.php';
	}
}else{
	include "data_artikel.php";
}

 ?>