<?php
	require_once '../lib/db.php';
	$nama   = htmlentities(trim($_POST['nama'])) ;
	$nim    = htmlentities(trim($_POST['nim'])) ;
	$email  = htmlentities(trim($_POST['email'])) ;
	$alamat = htmlentities(trim($_POST['alamat'])) ;
	$id     = $_POST['id'];
	$db->query("UPDATE satu SET 
				nama    ='$nama',
				nim     ='$nim',
				email   ='$email',
				alamat  ='$alamat'
				WHERE id='$id' ");
	

	if ($db->affected_rows)
	{
		echo"<script>alert('sukses terupdate');window.location='../index.php';</script>";
	}else{
		echo"<script>alert('gagal');window.location='../tambah.php';</script>";
	}
?>