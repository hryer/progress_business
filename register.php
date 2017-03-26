<?php session_start(); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Services</title>
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
   <!--  END HEADER  -->
   <div id="greenLine"></div> 
    <div id="content">
        <div id="container">
            <form class="form_regis" action="process/register_submit.php" method="post" enctype="multipart/form-data">
            
            <h1>Register Member</h1>

              <label for="Username">Username</label>
              <input type="text" name="username" placeholder="Username" required><br>

              <label for="Password">Password</label>
              <input type="password" name="password" placeholder="Password" required><br>

              <label for="Email">Email  : </label>
              <input type="email" name="email" placeholder="Email" required><br>

              <label for="gender">Gender</label>
              <p both:clear;>male</p><input type="radio" name="gender" id="gender" value="male">
              <p both:clear;>female</p><input type="radio" name="gender" id="gender" value="female"><br> 
              

              <label for="city">City  :</label>
              <input type="text" name="city" placeholder="city" required><br>

              <label for="Photo">Photo  :</label>
              <input type="file" name="photo_member" required><br>
              
              <label for="address">Address  : </label>
              <textarea name="address"  placeholder="your address"></textarea><br><br>

              <input type="submit" value="Register">


            </form>
        </div>
        	
           
    </div>
<!-- <! END FOOTER  --> 

	<script src="lightbox/js/jquery-1.11.0.min.js"></script>
	<script src="lightbox/js/lightbox.js"></script>
</body>
</html>
