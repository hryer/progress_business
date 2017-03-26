<?php 
	
	include "../config/config.php";

	$id_news = $_POST['id_news'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$comment = $_POST['comment'];
	$photo = $_POST['photo_member'];

	$sql = "INSERT INTO news_comment_tbl 
			(id_news,username,email,photo_member,comment,createdate)
			VALUES
			('$id_news','$username','$email','$photo','$comment',now())";

		$qcomment = $koneksi->query($sql);

		
		header("location:../news_detail.php?id_news=$id_news");



 ?>