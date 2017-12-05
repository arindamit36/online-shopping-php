<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="table.css" />
<title>Product Details</title>

</head>

<body bgcolor="#C0DCC0">
<h1><img src="flower-shops-9.jpg" height="200" width="1333" /></h1>
<?php
include("connect.php");
include("nav.php");
?>
<?php
$view="select * from product";
$ex=mysql_query($view);
?>
<h1 align="center" style="background-color:#999">Product Details &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php
								$Today = date('y:m:d');
								$new = date('l, F d, Y', strtotime($Today));
								echo $new;
								?></h1>
<h2 align="right"><?php include("add_product.php") ?></h2>
<table align="center" border="1">
<tr>
<td style="background-color:#0F0" align="center"><font size="+1">
Product Name
</td></font>
<td style="background-color:#0F0" align="center"><font size="+1">
Product Details
</td>
<td style="background-color:#0F0" align="center"><font size="+1">
Price
</td>
<td style="background-color:#0F0" align="center"><font size="+1">
Picture
</td>
<td style="background-color:#0F0" align="center"><font size="+1">
Action
</td>
</tr>


<?php
while($rowdata=mysql_fetch_array($ex))
{
	?>
<tr>

<td><?php echo $rowdata['pro_name'];?></td>
<td><?php echo $rowdata['pro_des'];?></td>
<td><?php echo $rowdata['pro_price'];?></td>
<td><img src="thumb/<?php echo $rowdata['pro_image']; ?>" height="100" width="100" /></td
></td>
<td><a href="delpro.php?del=<?php echo $rowdata['pro_id'];?>" title="Delete">Remove</a></td>
</tr>
<?php
}
?>
</table>
<div align="right">&copy; Flower shop 2014 Arindam Mukherjee &nbsp;&nbsp;&nbsp;&nbsp;<a href="#top">Top</a></div>





</body>
</html>