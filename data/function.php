<?php

include 'konektor.php'; 


function fetch_artikel($conn)
{
	$query = mysqli_query($conn, "SELECT * FROM artikel ORDER BY tanggal DESC");
	return $query;
}

function query_id($conn,$tbname, $id)
{
	$query = mysqli_query($conn, "SELECT * FROM $tbname WHERE id=$id");
	return $query;
}

function edit_artikel($conn,$data, $id){
	$judul = empty($data['judul']) ? "Tanpa judul": $data['judul'];
    $isi = $data['isi'];
	$penulis = $data['penulis'];
	$simpan = mysqli_query($conn, "UPDATE artikel SET judul='$judul',isi='$isi',penulis='$penulis' WHERE id=$id");
    return $simpan;
}

function edit_user($conn, $data, $id){
	$user = $data['username'];
	$pw = md5($data['password']);
	$fname = $data['full_name'];
	$email = $data['email'];
    $simpan = mysqli_query($conn, "UPDATE user SET username='$user', password='$pw', nama_lengkap='$fname', email='$email' WHERE id='$id'");
    return $simpan;
}

function tambah_user($conn, $data){
	$user = $data['username'];
	$pw = md5($data['password']);
	$fname = $data['full_name'];
	$email = $data['email'];
    $simpan = mysqli_query($conn, "INSERT INTO user (username,password,nama_lengkap,email) VALUES('$user','$pw','$fname','$email')");
    return $simpan;
}

function hapus_data_byId($conn, $tbname, $id){
	$query = mysqli_query($conn, "DELETE FROM $tbname WHERE id=$id");
	return $query;
}

function login($conn, $data)
{
	$user = $data['username'];
	$pw = md5($data['password']);
	$query = mysqli_query($conn, "SELECT * FROM user WHERE username='$user' AND password='$pw'");
	return mysqli_num_rows($query);
}

 ?>