<?php session_start(); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>News</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="wrapper">
  <div id="header">
        
           <div class="container">

                 <div id="container" clear:both;>
          <div class="login" style="height: 30px; float: right;">
          <?php include "config/config.php";
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
   
   <div id="greenLine"></div>
        <div id="content">
            
            <div class="container" clear:both;>
            
            <div class="top" >
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
                
                $view = 3;
               
                if(isset($_GET['page'])){
                  $page_aktif = $_GET['page'];
                }else{
                  $page_aktif = 1;
                }

                $awaldata = ($page_aktif-1)*$view;
                
                $sql = "SELECT * FROM news_tbl LIMIT $awaldata,$view";
                $qnews = $koneksi->query($sql); 
                $rownews = $qnews->fetch_assoc();
                do{
            ?>

              <div class="newsitem">
                  <div class="date_circle"><p class="day">
                  <?php 

                    $a=$rownews['createdate'];
                    $b=date('M', strtotime($a));
                    echo $b;
                  ?>
                  <span class="month">
                      <?php 

                       $c=date('Y', strtotime($a));
                       echo $c;
                    // $month=date('M');

                    // echo $month; ?>
                  </span></p></div>
                    <h2 class="news_title"><?php echo $rownews['title']; ?></h2>
                    <div class="clear"></div>
                    <div class="img_box" style="width:221px; height:182px; float:left;">
                    <img src="news_images/<?php echo $rownews['images'];?>" class="news_image"></div>
                    <p class="news_synopsis"><?php echo substr($rownews['description'],0,250); ?></p>
                    <a href="news_detail.php?id_news=<?php echo $rownews['id_news']; ?>" class="link_detail">Read More</a>
                </div>
                
                <?php 
                    }while($rownews = $qnews->fetch_assoc());
                ?>
                 <?php 
                 // Jumlah data yang sebenarnya
                    $sqltotal = "SELECT * FROM news_tbl";
                    $qtotal = $koneksi->query($sqltotal);
                    $total_data = $qtotal->num_rows;

                    // hal yang didapat
                    $total_page = ceil($total_data/$view);
                    // ceil pembulatan ke atas

                ?>

                <div class="pagination" style="padding-top: 10px; height:30px; ">
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
                
         
            </div><!--- END CONTENT WRAPPER -->
            
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
            margin-bottom: 1px;
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
            margin-right: 5px;
            margin-bottom: 1px;

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
 
</div>
</body>
</html>