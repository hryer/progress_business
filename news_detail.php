<?php session_start(); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>News Detail</title>
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
            <?php 
                $id_news= $_GET['id_news'];
                $koneksi = new mysqli("localhost","root","","progress_business_db");

                $sql = "SELECT * FROM news_tbl WHERE id_news = $id_news";
                $query = $koneksi->query($sql);
                $rownews = $query->fetch_assoc();
            ?>
 
                <div class="newsitemd">
					
                    <h2 class="news_title"><?php echo $rownews['title']; ?></h2>
                    <p class="crt_date"><?php echo $rownews['createdate']; ?></p>
                    <div class="clear"></div>
                    <p class="news_desc">
                    <img src="news_images/<?php echo $rownews['images']; ?>" align="left"> 
                      <?php echo $rownews['description']; ?>
                    </p>
                </div>

                <?php if(isset($_SESSION['username'])){ 
                    $session_username= $_SESSION['username'];
                    $sql_user = "SELECT * FROM user_tbl WHERE username ='$session_username'";
                    $quser = $koneksi->query($sql_user);
                    $rowuser = $quser->fetch_assoc();

                  ?>

                 <form class="comment_form" action="process/adding_comment.php" method="post">				<h4>Leave A Comment</h4>
                    
                    <input type="hidden" name="id_news" value="<?php echo $id_news; ?>"><br>
                    
                    <input type="hidden" name="photo_member" value="<?php echo $rowuser['photo_member']; ?>">
                    

                    <input type="email" placeholder="Email" name="email" required
                    value="<?php echo $rowuser['email']; ?>"><br>

                    <input type="text" placeholder="Username" name="username" required 
                    value="<?php echo $rowuser['username']; ?> "><br>

                    <textarea name="comment" placeholder="Your Comment" required></textarea><br>
                	<input type="submit" value="Comment">
                 </form>
           <?php }else{?>
              <h1 style="padding:10px;">You must login first before comment</h1>
           <?php } ?>
                 <div class="comment_wrap">

                 <?php 
                        $sql_news_comment = "SELECT * FROM news_comment_tbl WHERE id_news = '$id_news'";

                        $qcomment = $koneksi->query($sql_news_comment);
                  ?>
                 	<h1>Comments (<?php echo mysqli_num_rows($qcomment); ?>)</h1>
                    <?php While ($rowcomment = $qcomment->fetch_assoc()){ ?>
                    <div class="comment_list">
                    	<div class="user_photo">
                         <img src="photo_member/<?php echo $rowcomment['photo_member']; ?>" />
                        </div>
                        <div class="box_desc">
                          <h2><?php echo $rowcomment['username']; ?></h2>
                          <p> <?php echo $rowcomment['comment']; ?> </p>
                          <span><?php echo $rowcomment['createdate']; ?></span>
                        </div>
    
                    </div>
                    <?php } ?>
                 
                 </div>
                 
                 
         		
            </div><!--- END CONTENT Container -->
            
        </div>
		<div id="footer">
        
        	<div class="container">
            	<p> Copyright &copy; Your Company All Right Reserved</p>
            </div>
        
        </div>
</div>
</body>
</html>
