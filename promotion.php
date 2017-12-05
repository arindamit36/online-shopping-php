

 <?php
		$view=mysql_query("select * from product limit 3");
		
		?>
        <?php
while($rowdata=mysql_fetch_array($view))
{
	?>
        
        <div class="new_prod_box"><a href="details.php?pro_id=<?php echo $rowdata['pro_id'];?>"><?php echo  $rowdata["pro_name"]  ?></a>
          <div class="new_prod_bg"> <span class="new_icon"><img src="images/promo_icon.gif" alt="" /></span> <a href="details.php?pro_id=<?php echo $rowdata['pro_id'];?>"><img src="admin/thumb/<?php echo  $rowdata["pro_image"]  ?>" alt="" class="thumb" border="0" /></a> </div>
        </div>
        
        <?php
}
?>



