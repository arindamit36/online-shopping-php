 <?php 
		$sql1=mysql_query("select * from category");
		
		while($row=mysql_fetch_array($sql1))
		{
			?>
          <li><a href="acc_category.php?cat_id=<?php echo $row['cat_id'];?>"><?php echo $row['cat_name'];?></a></li>
      <?php
		}
		?>