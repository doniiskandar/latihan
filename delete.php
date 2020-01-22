<?php
//include file config.php
include('config.php');

//jika benar mendapatkan GET id dari URL
if(isset($_GET['id'])){
	//membuat variabel $id yang menyimpan nilai dari $_GET['id']
	$id = $_GET['id'];
	
	//melakukan query ke database, dengan cara SELECT data yang memiliki id yang sama dengan variabel $id
	$cek = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE id='$id'") or die(mysqli_error($koneksi));
	
//after delete redirect to home ,so that latest user list will be displayed .
header("location:list.php");
?>
