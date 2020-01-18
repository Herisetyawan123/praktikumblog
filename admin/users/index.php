<?php 

if (isset($_GET['action'])) {
  if ($_GET['action'] == 'tambah') {
    include 'tambah_user.php';
  }else  if ($_GET['action'] == 'edit') {
    include 'edit_user.php';
  }else if ($_GET['action'] == 'hapus') {
    include 'hapus_user.php';
  }
}else{
  include 'data_user.php';
}

 ?>
