<?php 
	include "../../config/config.php";

	session_start();

	$username=$_POST['username'];
	$password=$_POST['password'];

	$sql="SELECT * FROM admin_tbl WHERE username = '$username' and password = '$password'";
	$quser = $koneksi->query($sql);
	$rowuser = $quser->fetch_assoc();

	if(!empty($rowuser)){
		$_SESSION['username'] = $username ;
		header("location:../news_admin.php");
	}else{
		header("location:../index.php?error1");
	}
 ?>