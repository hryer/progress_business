<?php session_start(); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Gallery</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="lightbox/css/lightbox.css" type="text/css">
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
   <!---------------------------------------- END HEADER -------------------------------->
   <div id="greenLine"></div> 
   <div id="content">
        	<style>
				.img_box { width:100%;} 
				.img_box li { float:left;  overflow:hidden; margin:10px; height:200px; width:290px; border:1px solid red; }
				.img_box li:hover { box-shadow:3px 3px 3px #CCCCCC;}
        .img_box li img{ height:200px; border-radius:5px;}
            </style>
            <div class="container">
               <ul class="img_box">
               		<li><a class="" href="images/image_gallery/p1.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="example-image" src="images/image_gallery/p1.jpg" /></a>
                    </li>
                    <li><a class="" href="images/image_gallery/p2.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="example-image" src="images/image_gallery/p2.jpg" alt=""/></a></li>
                    
                    <li><a class="" href="images/image_gallery/p3.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="example-image" src="images/image_gallery/p3.jpg" alt=""/></a></li>
                    
                    <li><a class="" href="images/image_gallery/p4.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="example-image" src="images/image_gallery/p4.jpg" alt=""/></a></li>
                    
                    <li><a class="" href="images/image_gallery/p5.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="example-image" src="images/image_gallery/p5.jpg" alt=""/></a></li>
                    
                    <li><a class="" href="images/image_gallery/p6.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="example-image" src="images/image_gallery/p6.jpg" alt=""/></a></li>
                    
                    <li><a class="" href="images/image_gallery/p7.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="example-image" src="images/image_gallery/p7.jpg" alt=""/></a></li>
                    <li><a class="" href="images/image_gallery/p8.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="example-image" src="images/image_gallery/p8.jpg" alt=""/></a></li>
                    <li><a class="" href="images/image_gallery/p9.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="example-image" src="images/image_gallery/p9.jpg" alt=""/></a></li>
                    <li><a class="" href="images/image_gallery/p10.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="example-image" src="images/image_gallery/p10.jpg" alt=""/></a></li>
                    <li><a class="" href="images/image_gallery/p11.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="example-image" src="images/image_gallery/p11.jpg" alt=""/></a></li>
                    <li><a class="" href="images/image_gallery/p12.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="example-image" src="images/image_gallery/p12.jpg" alt=""/></a></li>
                    
                    <li><a class="" href="images/image_gallery/p14.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="example-image" src="images/image_gallery/p14.jpg" alt=""/></a></li>
                    
                    <li><a class="" href="images/image_gallery/p15.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="example-image" src="images/image_gallery/p15.jpg" alt=""/></a></li>
                    
               </ul>       
         
            </div><!--- END CONTENT WRAPPER -->
            
       </div> 
<!--------------------------------------- END CONTENT CONTENT--------------------------->
	   <div id="footer">
        
        	<div class="container">
            	<p> Copyright &copy; Your Company All Right Reserved</p>
            </div>
        
       </div>
<!---------------------------------------- END FOOTER --------------------------------->
</div>
	<script src="lightbox/js/jquery-1.11.0.min.js"></script>
	<script src="lightbox/js/lightbox.js"></script>
</body>
</html>
