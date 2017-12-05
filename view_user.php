<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Details</title>
<?php
include("header.php");
include("connect.php");
?>
</head>

<body>

<?php
$view="select * from admin";
$ex=mysql_query($view);
?>
<h1 align="center" style="background-color:#999">Administrator Details</h1>
<h2 align="right"><?php include("add_user.php") ?></h2>
<table align="center" border="2" bgcolor="#FF99FF">
<tr>
<td>
Sl No.
</td>
<td>
User Name
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
<td><?php echo $rowdata['user_id'];?></td>
<td><?php echo $rowdata['username'];?>
</td>
<td><a href="delete.php?del=<?php echo $rowdata['user_id'];?>" title="Delete">Remove</a></td>
</tr>
<?php
}
?>
</table>



<?php
include("footer.php");
?>


</body>
</html>