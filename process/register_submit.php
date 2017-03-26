<?php 
	include "../config/config.php";

	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$gender = $_POST['gender'];
	$city = $_POST['city'];	
	$address = $_POST['address'];
	$photo = $_FILES['photo_member']['name'];

	move_uploaded_file($_FILES['photo_member']['tmp_name'],'../photo_member/'.$photo);

	$sql = "INSERT INTO user_tbl(username,password,city,email,gender,photo_member,address,joindate)
	VALUES ('$username','$password','$city','$email','$gender','$photo','$address',now())";

	$qmember = $koneksi->query($sql);

	header('location:../index.php');
 ?>