<?php
	require_once 'lib/db.php';
	$id =$_GET['id'];
	if(empty($id))
	{
		header('location:index.php');
	}else
	{
		$res = $db->query("DELETE FROM satu WHERE id=$id");
			if($res)
			{
				echo"<script>alert('sukses');window.location='index.php';</script>";
			}else{
				echo"<script>alert('gagal');window.location='index.php';</script>";
			}
	}
	
?>