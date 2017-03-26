<?php 
	include '../../config/config.php';
	
	$id_news = $_POST['id_news'];

	$title = htmlentities($_POST['title'],ENT_QUOTES);
	$description = htmlentities($_POST['description'],ENT_QUOTES);

	$image_old = $_POST['image_old'];

	if($_FILES['images']['error'] == 0){
		$image = $_FILES['images']['name'];
		move_uploaded_file($_FILES['images']['tmp_name'],'../../news_images/'.$image);

		
		$sql = "UPDATE news_tbl SET title = '$title',description = '$description',images = '$image' WHERE id_news = $id_news";

	}else{
		$sql = "UPDATE news_tbl SET title = '$title',description = '$description' , images = '$image_old' WHERE id_news = $id_news";
	
	}

	$qnews = $koneksi->query($sql);

	header("location:../news_admin.php");
 ?>