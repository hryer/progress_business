<?php 

	include "../../config/config.php";
	$id_news = $_GET['id_news'];

	$sql = "DELETE FROM news_tbl WHERE id_news = $id_news";

	$query = $koneksi->query($sql);

	header("location:../news_admin.php");
 ?>