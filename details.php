<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Flower Shop - Details</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<link rel="stylesheet" type="text/css" href="style.css" />
<link rel="stylesheet" href="lightbox.css" type="text/css" media="screen" />
<script src="js/prototype.js" type="text/javascript"></script>
<script src="js/scriptaculous.js?load=effects" type="text/javascript"></script>
<script src="js/lightbox.js" type="text/javascript"></script>
<script type="text/javascript" src="js/java.js"></script>
</head>
<body>
<div id="wrap">
  <?php
  include("connect.php");
  include("header.php");
  ?>
  
  <?php
  $proid=$_GET['pro_id'];
 
 //current URL of the Page. cart_update.php redirects back to this URL
	$current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    
	$results = mysql_query("SELECT *
FROM `product`
WHERE pro_id = '$proid'");
    if ($results) { 
	
        //fetch results set as object and output HTML
        while($obj =mysql_fetch_object($results))
        {
 ?>
    
    
    
    
  <div class="center_content">
    <div class="left_content">
    <form method="post" action="cart_update.php">
      <div class="crumb_nav"> <a href="index.php">home</a> &gt;&gt; <?php echo $obj->pro_name; ?> </div>
      <div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" /></span><?php echo $obj->pro_name ?></div>
      <div class="feat_prod_box_details">
        <div class="prod_img"><img src="admin/thumb/<?php echo $obj->pro_image;?>" alt="" border="0" /></a> <br />
          <br />
          <a href="admin/upload/<?php echo $obj->pro_image ?>" rel="lightbox"><img src="images/zoom.gif" alt="" border="0" /></a> </div>
        <div class="prod_det_box">
          <div class="box_top"></div>
          <div class="box_center">
            <div class="prod_title">Details</div>
            <p class="details"><?php echo $obj->pro_des ?> </p>
            <div class="price"><strong>PRICE:</strong> <span class="red"><?php echo $obj->pro_price; ?></span></div>
            <div class="price"><strong>Quantity:</strong> <span class="colors">
           
<input type="text" name="product_qty" value="1" size="3" />
           
            </span> </div>
           <button class="add_to_cart">Add To Cart</button>
			</div></div>
           <input type="hidden" name="product_id" value="<?php echo $obj->pro_id; ?>" />
           <input type="hidden" name="type" value="add" />
			<input type="hidden" name="return_url" value="<?php echo $current_url;?>" />
            <div class="clear"></div>
          </div>
          <div class="box_bottom"></div>
        </div>
        <div class="clear"></div>
      </div>
      </form>
      <?php
         }
    
    }
     ?> 
     
      
      <div id="demo" class="demolayout">
        <ul id="demo-nav" class="demolayout">
          <li><a class="active" href="#tab1">More details</a></li>
          <li><a class="" href="#tab2">Related Products</a></li>
        </ul>
        <div class="tabs-container">
          <div style="display: block;" class="tab" id="tab1">
            <p class="more_details"> </p>
            <ul class="list">
              <li></li>
              <li></li>
              <li></li>
              <li></li>
            </ul>
            <p class="more_details">It is a very well known Flower that everybody likes.You can gift this flower for everybody that like you.So you can buy it at a very low price.Thank You. </p>
          </div>
          
          <?php
  $proid=$_GET['pro_id'];
  $sql=mysql_query("SELECT * FROM `product` WHERE pro_id='$proid'");
?>
          
          <?php
      
      while($obj =mysql_fetch_object($sql))
        {
 ?>
          <div style="display: none;" class="tab" id="tab2">
            <div class="new_prod_box"> <a href=""><?php echo $obj->pro_name ?></a>
              <div class="new_prod_bg"> <a href=""><img src="admin/thumb/<?php echo $obj->pro_image ?> " alt="" class="thumb" border="0" /></a> </div>
            </div>
            <?php
		}
		?>
            
            
            
            
            <div class="clear"></div>
          </div>
        </div>
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
        <p> <img src="images/about.gif" alt="" class="right" /> Our shop is localate in every state in india.You can find easily like Kolkata,Mumbai,Delhi,Bangaluru,<br />Channi etc . Our online service is available 24*7. </p>
      </div>
      <div class="right_box">
        <div class="title"><span class="title_icon"><img src="images/bullet4.gif" alt="" /></span>Promotions</div>
        <div class="new_prod_box"> <a href=""></a>
          <?php
		include("promotion.php");
		  ?>
        </div>
        
        
      </div>
      <div class="right_box">
        <div class="title"><span class="title_icon"><img src="images/bullet5.gif" alt="" /></span>Categories</div>
        <ul class="list">
          <?php
		  include("categories.php");		  ?>
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
  
  
  
  
  
  
 
  
  
  
  <!--end of center content-->
  
  <?php
  include("footer.php");
  ?></body>
<script type="text/javascript">

var tabber1 = new Yetii({
id: 'demo'
});

</script>
</html>
