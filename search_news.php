<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Search News</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="wrapper">
  <div id="header">
        
           <div class="container">

            <div id="container" clear:both;>
          <div class="login" style="height: 30px; float: right;">
          <?php if (isset($_SESSION['username'])){ ?>

          <p class="welcome">
            Halo, Selamat Datang <?php echo $_SESSION['username']; ?>
            <a href="process/logout_submit.php">Log Out</a>
          </p>
          <?php }else{ ?>
          <form action="process/login_submit.php" method="post" class="member_frm_lgn">
            <input type="text" name="username" placeholder="username" required>
            <input type="password" name="password" placeholder="password" required>
            <input type="submit" value="Login" >
            <a href="register.php"><input type="button" value="Register"></a>
          </form>
          <?php } ?>
          </div>
        </div>

           		<img id="logo" src="images/logo.png">
                <div id="menu">
                	<ul>
                    	   <li class="nav1"><a href="index.php">HOME</a></li>
                        <li class="nav2"><a href="news.php">NEWS</a></li>
                        <li class="nav3"><a href="products.php">PRODUCTS</a></li>
                        <li class="nav4"><a href="contact.php">CONTACT</a></li> 
                        <li class="nav5"><a href="gallery.php">GALLERY</a></li>
                    </ul>
                </div>
           </div>
            
     </div>
   
   <div id="greenLine"></div>
   		<div id="content">
        	
            <div class="container">
            <div class="top">
                    <form action="search_news.php" method="get">
                    <style>
                        .top{height: 25px;padding:10px;}
                        .top form{float:left; width: 250px;}
                    </style>
                        <input type="text" name="search" placeholder="cari artikel">
                        <input type="submit" value="search">
                    </form>
            </div>
            
           <?php 
                 include "config/config.php";

                $search = $_GET['search'];
                $sql = "SELECT * FROM news_tbl WHERE title LIKE '%$search%' ";
                $qnews = $koneksi->query($sql); 
                $rownews = $qnews->fetch_assoc();
                do{
             ?>

            	<div class="newsitem">
                	<div class="date_circle"><p class="day">28<span class="month">06</span></p></div>
                    <h2 class="news_title"><?php echo $rownews['title']; ?></h2>
                    <div class="clear"></div>
                    <div class="img_box" style="width:221px; height:182px; float:left;">
                    <img src="news_images/<?php echo $rownews['images']?>" class="news_image"></div>
                    <p class="news_synopsis"><?php echo substr($rownews['description'],0,250); ?></p>
                    <a href="news_detail.php?id_news=<?php echo $rownews['id_news']?>" class="link_detail">Read More</a>
                </div>
                
                 <?php 
                    }while($rownews = $qnews->fetch_assoc());
                ?>
                
         
            </div><!--- END CONTENT WRAPPER -->
            
        </div>

		<div id="footer">
        
        	<div class="container">
            	<p> Copyright &copy; Your Company All Right Reserved</p>
            </div>
        
        </div>
 
</div>
</body>
</html>
