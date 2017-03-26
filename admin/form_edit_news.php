<?php 
	session_start();
	if(!isset($_SESSION['username'])){
			header("location:index.php?error2");
	}
	
 ?>
 <!doctype html>
<html> 
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Edit News | Progress Business</title> 
<link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/navi.css" media="screen" />
<link rel="icon" type="image/png" href="img/admin-button-icon-hi.png"/>
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="js/togel_menu.js"></script>
<style>.hide{ display:none !important;  /*visibility:hidden;*/ } </style>
</head>
<body>
<div class="wrap">
	<div id="header">
		<div id="top">
			<div class="left">
				<p>Welcome, <strong>Admin</strong> [ <a href="#">logout</a> ]</p>
			</div>
			<div class="right">
				<div class="align-right">
					<span style="float:left;">Today :</span><p id="date"><strong></strong></p>
				</div>
			</div>
		</div>
		<div id="nav"> 
			<ul>
				<li class="upp"><a href="news_admin.php">News</a>
				</li>
				<li class="upp "><a href="member.php">Member</a>
				</li>
				<li class="upp "><a href="user.php">User</a>
				</li>
				<li class="upp "><a href="product.php">Product</a>
				</li>
                <li class="upp "><a href="contact.php">Contact</a>
				</li>
			</ul>
		</div>
	</div>
	
	<div id="content">
		<div id="sidebar">
			<div class="box">
				<div class="h_title">&#8250; Menu Content</div>
				<ul id="home">
					<li class="b1"><a class="icon page" href="news_admin.php">News </a></li>
                    <li class="b1"><a class="icon add_user" href="member.php">Member</a></li>
					<li class="b2"><a class="icon config" href="user.php">User </a></li>
					<li class="b2"><a class="icon product" href="product.php">Product</a></li>
                    <li class="b2"><a class="icon contact" href="contact.php">Contact</a></li>
				</ul>
			</div>
		</div>
		<div id="main">
        
        
		  <div class="clear"></div>
          
            
            <div class="full_w" id="form_geje">
			  <div class="h_title">Edit News </div>

			  <?php 
			  		include "../config/config.php";
			  		$id_news = $_GET['id_news'];

			  		$sql = "SELECT * FROM news_tbl WHERE id_news = $id_news";
			  		$qnews = $koneksi->query($sql);
			  		$rownews = $qnews->fetch_assoc();
			   ?>
				<form action="process/edit_news.php" method="post" enctype="multipart/form-data">
					<div class="element">
						<input type="hidden" name="id_news" value="<?php echo $rownews['id_news']; ?> ">
						<label for="title"> Title <span class="red">(required)</span></label>
						<input id="title" name="title" class="text" value="<?php echo $rownews['title']; ?>" />
					</div>
                    
                    <div class="element">  
                    	
                        <label for="description"> Description <span class="red">(required)</span></label>
						<textarea class="textarea" name="description" rows="10" > <?php echo $rownews['description']; ?></textarea>
 
                    </div>
                    
                    <div class="element">
                    	<img src="../news_images/<?php echo $rownews['images'];?>" alt="" width=150px; height=150px;>
                    	<input type="hidden" name="image_old" value="<?php echo $rownews['images'];  ?> ">
						<label for="gambar">Ganti File Fambar</label>
						<input type="file" name="images" />
					</div>

					<div class="entry">
					  <button type="submit" class="add">Save </button> <button class="cancel">Cancel</button>
					</div>
				</form>
		  </div>
            
            
	  </div>
		<div class="clear"></div>
	</div>

	<div id="footer">
		<div class="left">
			<p>Admin Panel: <a href="../index.php">Progress Business</a></p>
		</div>
		<div class="right">
			<p>@ 2015 </p>
		</div>
	</div>
</div>

</body>

<script>
var d = new Date();
document.getElementById("date").innerHTML = d.toDateString();
</script>

</html>