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
        	
            <div class="container">
                <div class="top">
                    <form action="search_product.php" method="get">
                    <style>
                        .top{height: 25px;padding:10px;}
                        .top form{float:left; width: 250px;}
                    </style>
                        <input type="text" name="search" placeholder="cari product">
                        <input type="submit" value="search">
                    </form>
            </div>
            
            <?php 
                include "config/config.php";
                $view = 6;
               
                if(isset($_GET['page'])){
                  $page_aktif = $_GET['page'];
                }else{
                  $page_aktif = 1;
                }

                $awaldata = ($page_aktif-1)*$view;
                
                $sql = "SELECT * FROM product_tbl LIMIT $awaldata,$view";
                $qproduct = $koneksi->query($sql); 
                $rowproduct = $qproduct->fetch_assoc();
                do{
            ?>

                <div class="product_item">
                	<div class="number_icon"><?php echo $rowproduct['id_product']?></div>
                    <h2 class="product_title"><?php echo $rowproduct['name_product']?></h2>
                	<a class="example-image-link" href="product/<?php echo $rowproduct['gambar_product']?>" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img width="150px" height="150px" src="product/<?php echo $rowproduct['gambar_product']?>"></a>
                    <p class="product_desc">
                   <?php echo substr($rowproduct['description_product'],0,110) ?>
                    </p>
                    <a href="product_detail.php?id_product=<?php echo $rowproduct['id_product']?>" class="detail_product">Read More</a>
                </div>
                <?php 
                    }while($rowproduct = $qproduct->fetch_assoc() );
                ?>
         
                 <?php 
                 // Jumlah data yang sebenarnya
                    $sqltotal = "SELECT * FROM product_tbl";
                    $qtotal = $koneksi->query($sqltotal);
                    $total_data = $qtotal->num_rows;

                    // hal yang didapat
                    $total_page = ceil($total_data/$view);
                    // ceil pembulatan ke atas

                ?>

                <div class="pagination" style="padding-top: 10px; height:30px; clear:both; ">
                  <?php for ($i=1; $i<=$total_page ; $i++) { 
                    if($i==$page_aktif){ ?>
                      <div class="pagelinkactive">
                        <?php echo $i; ?>
                      </div>
                    <?php } else{?>
                      <a href="?page=<?php echo $i; ?>" class="pagelink">
                        <?php echo $i; ?>
                      </a>
                  <?php } 
                }?>

                </div>
            </div>
            
       </div> 
    
     <style>
          .pagelinkactive{
            background-color: #60b000;
            color:#fff;
            text-align: center;
            height: 20px;
            width: 25px;
            display: block;
            float: left;
            border-radius: 3px;
            margin-right: 5px;
            margin-top: 50px;
          }

          .pagelink{
            background-color: #000;
            color:#fff;
            text-align: center;
            height: 20px;
            width: 25px;
            display: block;
            float: left;
            border-radius: 3px;
            margin-top: 50px;

            margin-right: 5px;
            text-decoration: none;
          }

          .pagelink:hover{
            background-color: #60b000;
          }

        </style>

	   <div id="footer">
        
        	<div class="container">
            	<p> Copyright &copy; Your Company All Right Reserved</p>
            </div>
        
       </div>
<!-- <! END FOOTER  --> 
</div>
	<script src="lightbox/js/jquery-1.11.0.min.js"></script>
	<script src="lightbox/js/lightbox.js"></script>
</body>
</html>
