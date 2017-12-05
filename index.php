<?php
include("header.php");
include("connect.php");
?>
<body>
  <div class="center_content">
    <div class="left_content">
      <div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" /></span>Featured products</div>
      <?php
	  $sql="select * from product limit 6";
	  $ex=mysql_query($sql);
	  ?>
      
      <?php
while($rowdata=mysql_fetch_array($ex))
{
	?>
      
      
      <div class="feat_prod_box">
        <div class="prod_img"><img src="admin/thumb/<?php echo $rowdata["pro_image"] ?>"/></a></div>
        <div class="prod_det_box">
          <div class="box_top"></div>
          <div class="box_center">
            <div class="prod_title"><?php echo $rowdata["pro_name"] ?></div>
            <p class="details"><?php echo $rowdata["pro_des"] ?></p>
            <a href="" class="more">- more details -</a>
            <div class="clear"></div>
          </div>
          <div class="box_bottom"></div>
        </div>
        <div class="clear"></div>
      </div>
	 
	  <?php
}
?>
      
      
      <div class="new_products">
      
        
      </div>
      <div class="clear"></div>
    </div>
    <!--end of left content-->
    <div class="right_content">
      <div class="languages_box"> <span class="red">Languages:</span> <a href="" class="selected"><img src="images/gb.gif" alt="" border="0" /></a> <a href=""><img src="images/fr.gif" alt="" border="0" /></a> <a href=""><img src="images/de.gif" alt="" border="0" /></a> </div>
      <div class="currency"> <span class="red">Currency: </span> <a href="">GBP</a> <a href="">EUR</a> <a href="" class="selected">USD</a> </div>
      <div class="cart">
        <div class="title"><span class="title_icon"><img src="images/cart.gif" alt="" /></span>My cart</a></div>
        <div class="home_cart_content"><a href="view_cart.php" style="text-decoration:none">View Cart</a>  | <span class="red">TOTAL:  </span> </div>
        <a href="cart.html" class="view_cart"></a> </div>
      <div class="title"><span class="title_icon"><img src="images/bullet3.gif" alt="" /></span>About Our Shop</div>
      <div class="about">
        <p> <img src="images/about.gif" alt="" class="right" /> Our shop is localate in every state in india.You can find easily like Kolkata,Mumbai,Delhi,Bangaluru,<br />Channi etc . Our online service is available 24*7.</p>
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
  include("footer.php")
  ?>
  
  </body>
</html>
