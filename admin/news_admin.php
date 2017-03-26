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
<title>Admin | Progress Business</title> 
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
				<p>Welcome, <strong>Admin</strong> [ <a href="process/logout_admin.php">logout</a> ]</p>
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
          
			
			
			<div class="full_w">
				<div class="h_title">Manage pages - News</div>
				<h2>News</h2><?php //judul table ?>
				<p>Ini adalah Content Berita, untuk menambah berita baru, silahkan menginput berita pada Form dibawah</p>
                <a href="form_add_news.php" style="float:right; margin-bottom:0px;"> 
                <button type="submit" class="add">Add News</button>
                </a>
				
				<div class="entry">
					<div class="sep"></div>
				</div>
               

                
				<table>
					<thead>
						<tr>
							<th scope="col">Id News</th>
							<th scope="col">Title</th>
							<th scope="col">Image</th>
							<th scope="col">Synopsis</th>
                            <th scope="col">Create Date</th>
							<th scope="col" style="width: 65px;">Modify</th>
						</tr>
					</thead>
						<?php 
								include "../config/config.php";

								$view = 5;

								if(isset($_GET['page'])){
									$page_aktif = $_GET['page'];
								}else{
									$page_aktif = 1;
								}

								$awaldata = ($page_aktif-1)*$view;

								$sql = "SELECT * FROM news_tbl ORDER BY createdate DESC LIMIT $awaldata,$view";

								$qnews = $koneksi->query($sql);
								$rownews = $qnews->fetch_assoc();
								do{
               			
                		?>
					<tbody>
                  
						<tr>
							<td class="align-center"><?php echo $rownews['id_news']; ?></td>
							<td><?php echo $rownews['title']; ?></td>
							<td>
                            	<img style="width:100%; height: 150px;" src="../news_images/<?php echo $rownews['images']; ?>" />
                            </td>
                            <td><?php echo substr($rownews['description'],0,100); ?></td>
							<td><?php echo $rownews['createdate']; ?></td>
							
							<td>
								<a href="form_edit_news.php?id_news=<?php echo $rownews['id_news']; ?>" class="table-icon edit" title="Edit"></a>
								<a href="#" class="table-icon archive" title=" View Comment"></a>
								<a href="process/delete_news.php?id_news=<?php echo $rownews['id_news']; ?>" class="table-icon delete" title="Delete"></a>
							</td>
						</tr>

					</tbody>
					<?php }while($rownews = $qnews->fetch_assoc()); ?>
				</table>
				
				  <?php 
                 // Jumlah data yang sebenarnya
                    $sqltotal = "SELECT * FROM news_tbl";
                    $qtotal = $koneksi->query($sqltotal);
                    $total_data = $qtotal->num_rows;

                    // hal yang didapat
                    $total_page = ceil($total_data/$view);
                    // ceil pembulatan ke atas

                ?>

				<div class="entry">
					<div class="pagination">
					<?php for ($i=1;$i<=$total_page;$i++) {?>
						<?php if($i == $page_aktif){ ?>
							<span class="active"><?php echo $i; ?></span>
						<?php }else{?>
							<a href="?page=<?php echo $i  ?>"><?php echo $i ?></a>
						<?php } ?>
					<?php } ?>
					</div>
                    
					<div class="sep hide"></div>		
				  <a class="button add hide" href="">Add new page</a> <a class="button hide" href="">Categories</a> 
				</div>
        
			</div>
            
      
	  </div>
		<div class="clear"></div>
	</div>

	<div id="footer">
		<div class="left">
			<p>Admin Panel: <a href="../index.php">Progress Business</a></p>
		</div>
		<div class="right">
			<p>@ 2017 </p>
		</div>
	</div>
</div>

</body>

<script>
var d = new Date();
document.getElementById("date").innerHTML = d.toDateString();
</script>

</html>

