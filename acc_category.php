<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Category Accesesaries</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<?php 
include("header.php");
include("connect.php"); 
?>
<?php
$catid=$_GET["cat_id"];

$sql="SELECT * FROM product WHERE cat_id = '$catid'";
$ex=mysql_query($sql);
?>

<?php
$catid=$_GET["cat_id"];

$sql1="SELECT * FROM category WHERE cat_id = '$catid'";
$ex1=mysql_query($sql1);
?>
<?php
while($row=mysql_fetch_array($ex1))
{
	?>
<div class="center_content">
    <div class="left_content">
      <div class="crumb_nav"> <a href="index.php">home</a> &gt;&gt; <?php echo $row['cat_name'];?>  </div>
      <div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" /></span>Category <?php echo $row['cat_name'];?></div>
      <?php
}
?>
     
      <div class="new_products">   
      
  <?php 
 while($rowdata=mysql_fetch_array($ex))
 {
 ?>
      
        <div class="new_prod_box"> <a href="details.php?pro_id=<?php echo $rowdata['pro_id'];?>"><?php echo $rowdata['pro_name']; ?></a>
          <div class="new_prod_bg"> <a href="details.php?pro_id=<?php echo $rowdata['pro_id'];?>"><strong></strong><img src="admin/thumb/<?php echo $rowdata['pro_image']; ?>" alt="" class="thumb" border="0" /></a> </div>
        </div>
        <?php
 }
 ?>
        
       
        <div class="pagination"> <span class="disabled"><<</span><span class="current">1</span><a href="http://all-free-download.com/free-website-templates/">2</a><a href="http://all-free-download.com/free-website-templates/">3</a>…<a href="http://all-free-download.com/free-website-templates/">10</a><a href="http://all-free-download.com/free-website-templates/">11</a><a href="http://all-free-download.com/free-website-templates/">>></a> </div>
      </div>
      <div class="clear"></div>
    </div>
    <!--end of left content-->
    <div class="right_content">
      <div class="languages_box"> <span class="red">Languages:</span> <a href="http://all-free-download.com/free-website-templates/"><img src="images/gb.gif" alt="" border="0" /></a> <a href="http://all-free-download.com/free-website-templates/"><img src="images/fr.gif" alt="" border="0" /></a> <a href="http://all-free-download.com/free-website-templates/"><img src="images/de.gif" alt="" border="0" /></a> </div>
      <div class="currency"> <span class="red">Currency: </span> <a href="http://all-free-download.com/free-website-templates/">GBP</a> <a href="http://all-free-download.com/free-website-templates/">EUR</a> <a href="http://all-free-download.com/free-website-templates/"><strong>USD</strong></a> </div>
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
		$sql1=mysql_query("select * from category");
		?>
        <?php
		while($row=mysql_fetch_array($sql1))
		{
			?>
          <li><a href="acc_category.php?cat_id=<?php echo $row['cat_id'];?>"><?php echo $row['cat_name'];?></a></li>
      <?php
		}
		?>
        </ul>
        <div class="title"><span class="title_icon"><img src="images/bullet6.gif" alt="" /></span>Follow Us</div>
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
