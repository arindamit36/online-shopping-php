<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="table.css" />
<title>Welcome Admin</title>
</head>

<body>
<h1><img src="flower-shops-9.jpg" height="200" width="1333" /></h1>

<?php
include("connect.php");
include("nav.php");
?>
<div style="background-color:#9FF"><font size="+3">
<?php
session_start();
if($_SESSION['username'])
{
	echo "Welcome ". $_SESSION['username'];
}
else
{
	header("location:index.php");
}

?>
</font>
</div>

<fieldset style="border-style:dashed; border-color:#70DF57;">
<legend style="font-family:'Palatino Linotype', 'Book Antiqua', Palatino, serif"; align="center" ><font size="+2">Category :</legend></font>
<ul style="text-align:right">
<li><a href="view_cat.php" style="text-decoration:none"><font size="+1">View Categories </a></li>
<li><a href="add_category.php" style="text-decoration:none">Add New Category</a></li></font>
</ul>
</fieldset>
<fieldset style="border-style: dotted; border-color: #500">
<legend style="font-family:'Palatino Linotype', 'Book Antiqua', Palatino, serif" align="center"><font size="+2">Product :</legend></font>
<ul style="text-align:right">
<li><a href="view_prod.php" style="text-decoration:none"><font size="+1">View Products</a></li>
<li><a href="add_newproduct.php" style="text-decoration:none">Add New Product</a></li></font>
</ul>
</fieldset>
<?php
include("footeradmin.php");
?>
</body>
</html>
