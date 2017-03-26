<!doctype html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title> Login Admin | Progress Business</title>
<link rel="stylesheet" type="text/css" href="css/login.css" media="screen" />
</head>
<body>
<div class="wrap">
	<div id="content">
		<div id="main">
			<div class="full_w">
				<form action="process/login_admin.php" method="post">
					<label for="login">Username:</label>
					<input id="login" name="username" class="text" />
					<label for="pass">Password:</label>
					<input id="pass" name="password" type="password" class="text" />
					<div class="sep">
						<?php if(isset($_GET['error1']))
						{echo "<p style='color:red; font-size:14px; text-align:center;'>Maaf Username / Password Yang Anda Masukan Salah</p>";
						}else if(isset($_GET['error2'])){
							echo "<p style='color:red; font-size:14px; text-align:center;'>Silahkan login terlebih dahulu</p>";
							}
						 ?>
						
                    </div>
					<button type="submit" class="ok">Login</button>
				</form>
			</div>
			<div class="footer">&raquo; <a href="">http://yourpage.com</a> | Admin Panel</div>
		</div>
	</div>
</div>

</body>
</html>
