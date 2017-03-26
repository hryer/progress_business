<?php 
	session_start();
	
	include "../config/config.php";

	$username = $_POST['username'];
	$password = $_POST['password'];



	$sql = "SELECT * FROM user_tbl WHERE username = '$username' AND password='$password'";
	$quser = $koneksi->query($sql);
	$rowuser = $quser->fetch_assoc();

	if(!empty($rowuser)){
		$_SESSION['username'] = $username;

		header("location:../index.php");
	}else{
		echo "Username / Password yang anda masukan salah <br>
		<a href='../index.php'> Kembali ke Home</a> atau Silahkan
		<a href='../register.php'> Registrasi </a>  ";

	}

 ?>