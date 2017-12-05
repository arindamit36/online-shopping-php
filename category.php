<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Category </title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<?php 
include("header.php");
include("connect.php"); 
?>

<?php
$sql="select * from product";
$ex=mysql_query($sql);
?>



<div class="center_content">
    <div class="left_content">
      <div class="crumb_nav"> <a href="index.php">Home</a> &gt;&gt; category name </div>
      <div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" /></span>Category- Products</div>
      <div class="new_products">
      
      <?php
$sql="select * from product";
$ex=mysql_query($sql);
?>
 <?php 
 while($rowdata=mysql_fetch_array($ex))
 {
 ?>
      
        <div class="new_prod_box"> <a href="details.php?pro_id=<?php echo $rowdata['pro_id']; ?>"><?php echo $rowdata['pro_name']; ?></a>
          <div class="new_prod_bg"> <a href="details.php?pro_id=<?php echo $rowdata['pro_id']; ?>"><img src="admin/thumb/<?php echo $rowdata['pro_image'] ?>" alt="" class="thumb" border="0" /></a> </div>
        </div>
        <?PHP
 }
 ?>
        
       
        <div class="pagination"> <span class="disabled"><<</span><span class="current">1</span><a href="http://all-free-download.com/free-website-templates/">2</a><a href="http://all-free-download.com/free-website-templates/">3</a>…<a href="http://all-free-download.com/free-website-templates/">10</a><a href="http://all-free-download.com/free-website-templates/">11</a><a href="http://all-free-download.com/free-website-templates/">>></a> </div>
      </div>
      <div class="clear"></div>
    </div>
    <!--end of left content-->
    <div class="right_content">
      <div class="languages_box"> <span class="red">Languages:</span> <a href=""><img src="images/gb.gif" alt="" border="0" /></a> <a href=""><img src="images/fr.gif" alt="" border="0" /></a> <a href=""><img src="images/de.gif" alt="" border="0" /></a> </div>
      <div class="currency"> <span class="red">Currency: </span> <a href="">GBP</a> <a href="">EUR</a> <a href=""><strong>USD</strong></a> </div>
      <div class="cart">
        <div class="title"><span class="title_icon"><img src="images/cart.gif" alt="" /></span>My cart</div>
        <div class="home_cart_content"> 3 x items | <span class="red">TOTAL: 100$</span> </div>
        <a href="http://all-free-download.com/free-website-templates/" class="view_cart">view cart</a> </div>
      <div class="title"><span class="title_icon"><img src="images/bullet3.gif" alt="" /></span>About Our Shop</div>
      <div class="about">
        <p> <img src="images/about.gif" alt="" class="right" /> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud. </p>
      </div>
      <div class="right_box">
        <div class="title"><span class="title_icon"><img src="images/bullet4.gif" alt="" /></span>Promotions</div>
        <?php
		include("promotion.php");
		?>
        
        
      </div>
      <div class="right_box">
        <div class="title"><span class="title_icon"><img src="images/bullet5.gif" alt="" /></span>Categories</div>
        <ul class="list">
       <?php
	   include("categories.php");
	   ?>
        </ul>
        <div class="title"><span class="title_icon"><img src="images/bullet6.gif" alt="" /></span>Partners</div>
        <ul class="list">
          <?php
		  include("followus.php");
		  ?>
        </ul>
      </div>
    </div>
    <!--end of right content-->
    <div class="clear"></div>
  </div>
    
    
  
  <?php
  include("footer.php");
  ?>
  </body>
</html>
