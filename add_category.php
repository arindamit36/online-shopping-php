<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add Category</title>
</head>
<?php
include("header.php");
include("connect.php");
?>

<body>
<h1>Add a new Category :</h1>
<form name="addcat" method="post" action="">
<table align="center" style="background-color:#0CF"; style="border:double">
<tr>
<th>Add Category :</th>
<td>Category Name :</td>
<td><input type="text" name="catname" id="catname" /></td><br />
</tr>
<tr>
<td align="center" colspan="3"><input type="submit" name="submit" value="Add Category"  /></td>
</tr>
</table>
</form>



<?php
if(isset($_POST['submit']))
{
	$catname=$_POST['catname'];
	 $sql="INSERT INTO `category` (`cat_id`, `cat_name`) VALUES ('', '$catname')";
	$ex=mysql_query($sql);
}
header("location:view_cat.php")
?>





</body>


</html>