<?php 
	
	include "../../config/config.php";
	$title = htmlentities($_POST['title'],ENT_QUOTES);
	$description = htmlentities($_POST['description'],ENT_QUOTES);
	$images = $_FILES['images']['name'];

	move_uploaded_file($_FILES['images']['tmp_name'],'../../news_images/'.$images);

	$sql = "INSERT INTO news_tbl (title,description,images,createdate)
			VALUES ('$title','$description','$images',now())"; 

	$quser = $koneksi->query($sql);

	header('location:../news_admin.php');

 ?>