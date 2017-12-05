


 <?php 
		$sql1=mysql_query("select * from category");
		?>
        <?php
		while($row=mysql_fetch_array($sql1))
		{
			?>

        <div class="new_prod_box"> <a href="details.php?pro_id=<?php echo $rowdata['pro_id']; ?>"><?php echo $row['pro_name'];?></a>
          <div class="new_prod_bg"> <span class="new_icon"><img src="images/new_icon.gif" alt="" /></span> <a href=""><img src="images/thumb1.gif" alt="" class="thumb" border="0" /></a> </div>
        </div>
        
        <?php
        }
        ?>
        


