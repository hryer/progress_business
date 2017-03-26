<?php session_start(); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Contact</title>
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
   <!---------------------------------------- END HEADER -------------------------------->
   <div id="greenLine"></div>  
   		<div id="content">
        	<div class="container">
                <form id="form_contact" method="post" action="#" >
                    <h2>Contact Form</h2>
                    <table>
                        <tr>
                            <td>Your Name :</td>
                            <td><input type="text" name="name"></td>
                        </tr>
                        <tr>
                            <td>Your City :</td>
                            <td><input type="text" name="city"></td>
                        </tr>
                        <tr>
                            <td>Your E-mail :</td>
                            <td><input type="text" name="email"></td>
                        </tr>
                        <tr>
                            <td colspan="2">Your Message :</td>
                        </tr>
                        <tr>
                            <td colspan="2"><textarea name="message" class="message"></textarea></td>
                        </tr>
                        <tr>
                            <td colspan="2" align="right">
                            <input type="reset" class="effect" value="Clear"> 
                            <input type="button" class="effect" value="Send">
                            </td>
                        </tr>
                    </table>
                </form>
            	<div id="contact_right">
            		<h2>Contacts</h2>
                    <p><strong>Country</strong> : USA</p>
                    <p><strong>City</strong> : San Diego</p>
                    <p><strong>Telephone</strong> : +354 5635600</p>
                    <p><strong>Email</strong> : <a href="#">yourcompany@info.com</a></p>
                    <h2>Our Location</h2>
                    <iframe width="400" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Itc+Permata+Hijau,+Kebayoran+Lama,+Indonesia&amp;aq=0&amp;oq=Itc+Per&amp;ie=UTF8&amp;hq=&amp;hnear=&amp;ll=-6.221635,106.78456&amp;spn=0.006295,0.006295&amp;t=m&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Itc+Permata+Hijau,+Kebayoran+Lama,+Indonesia&amp;aq=0&amp;oq=Itc+Per&amp;ie=UTF8&amp;hq=&amp;hnear=&amp;ll=-6.221635,106.78456&amp;spn=0.006295,0.006295&amp;t=m&amp;iwloc=A" style="color:#0000FF;text-align:left">View Larger Map</a></small>
            	</div>
            </div>
        </div>
<!--------------------------------------- END CONTENT CONTENT--------------------------->
	   <div id="footer">      
            	<p> Copyright &copy; Your Company All Right Reserved</p>      
       </div>
<!---------------------------------------- END FOOTER --------------------------------->
</div>
</body>
</html>
