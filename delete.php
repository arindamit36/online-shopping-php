<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<?php
include("header.php");
include("connect.php");
?>
</head>
<?php
$id=$_GET['del'];
$del=mysql_query("delete from category where cat_id=$id");
header("location:view_cat.php");
?>

<body>
</body>
</html>