<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="tablecat.css" />
<title>Category Details</title>
</head>

<body>
<h1><img src="flower-shops-9.jpg" height="200" width="1333" /></h1>

<?php

include("connect.php");
include("nav.php");
?>

<?php
$view="select * from category";
$ex=mysql_query($view);
?>
<h1 align="center" style="background-color:#999">Category Details</h1>
<h2 align="right"><?php include("addcat.php") ?></h2>
<table align="center" border="2" bgcolor="#FF99FF">
<tr>
<td>
Sl No.
</td>
<td>
Category Name
</td>
<td>
Action
</td>
</tr>


<?php
while($rowdata=mysql_fetch_array($ex))
{
	?>
<tr>
<td><?php echo $rowdata['cat_id'];?></td>
<td><?php echo $rowdata['cat_name'];?>
</td>
<td><a href="delete.php?del=<?php echo $rowdata['cat_id'];?>" title="Delete">Remove</a>
<a href="edit_category.php?update=<?php echo $rowdata['cat_id'];?>" title="Update">Update</a></td>
</tr>
<?php
}
?>
</table>






</body>
</html>