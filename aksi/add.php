<?php
	require_once '../lib/db.php';
	$nama   = htmlentities(trim($_POST['nama'])) ;
	$nim    = htmlentities(trim($_POST['nim'])) ;
	$email  = htmlentities(trim($_POST['email'])) ;
	$alamat = htmlentities(trim($_POST['alamat'])) ;

	$db->query("INSERT INTO satu(nama,nim,email,alamat)
				VALUES ('$nama','$nim','$email','$alamat')
		");
	if ($db->affected_rows == 1)
	{
		echo"<script>alert('sukses');window.location='../index.php';</script>";
	}else{
		echo"<script>alert('gagal');window.location='../tambah.php';</script>";
	}
?>