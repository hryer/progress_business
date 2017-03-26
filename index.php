<?php session_start(); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Our Company</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
 <link href="images/tab_icon.ico" rel="shortcut icon" />
</head>
<body>
	<div id="wrapper">

		
    
    	<div id="header">


        
           <div class="container">

		        <div id="container" clear:both;>
					<div class="login" style="height: 30px; float: right;">
					<?php include "config/config.php";
					// $q= "SELECT * FROM user_tbl WHERE username='$username' AND password='$password'";
					// $e= mysqli
					if (isset($_SESSION['username'])){ ?>

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
        <div id="slider">
        
        	<div class="container">
            	<img src="images/img1.jpg">
            </div>
            
        </div>
<!---------------------------------------- END SLIDER -------------------------------->
        <div id="content">
        	
            <div class="container">
            
			   <div id="content_top">
                	<div class="section"><img src="images/Bussines_Planning.png"> <p>Progress is one of free website templates created by TemplateMonster.com, optimized for 1024x768 res. </p><a href="#">Read More</a></div>
                    <div class="section"><img src="images/Business_Strategies.png"><p>This Progress Template goes with two packages – with PSD source files and without them </p><a href="#">Read More</a></div>
                    <div class="section"><img src="images/Powerful_Analytic.png"><p>PSD source files are available for free for registered members. The basic package is available for anyone </p><a href="#">Read More</a></div>
                    <div class="last-section"><img src="images/World_Wide_Sols.png"><p>This website template has several pages: Home, News, Services, Products, Contacts (contact form doesn’t work). </p><a href="#">Read More</a></div>
                </div>
                
                <div id="content_btm">
                
                	<div id="content_btm_left">
                    	<h2 class="greetings">Welcome, Dear Visitor!</h2>
                        <p><img src="images/page1_img1.jpg">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa</p>

<p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore.</p>
                    </div>
                    
                    <div id="content_btm_right">
                    	<iframe width="300" height="270" src="http://www.youtube.com/embed/IzsbJ5z1WM4" frameborder="0" allowfullscreen></iframe>

                    </div>
                </div>
                 
            </div>
            
        </div>
<!---------------------------------------- END CONTENT ------------------------------->
        <div id="footer">
        
        	<div class="container">
            	<p> Copyright &copy; Your Company All Right Reserved</p>
            </div>
        
        </div>
<!---------------------------------------- END FOOTER --------------------------------->
        
    </div>
</body>
</html>
