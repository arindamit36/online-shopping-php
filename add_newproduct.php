<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add Category</title>
<link rel="stylesheet" type="text/css" href="table.css" />
</head>
<body>
<h1><img src="flower-shops-9.jpg" height="200" width="1333" /></h1>

<?php
include("nav.php");
include("connect.php");
?>
<h2>Add a new Product :</h2>
<form name="addpro" method="post" action="" enctype="multipart/form-data">
<table align="center" style="background-color:#0CF">
<tr>
<td>Product Name :</b></td>
<td><input type="text" name="proname" id="proname" /></td>
</tr>
<tr>
<td>Description :</td>
<td><input type="text" name="prodes" id="prodes" /></td>
</tr>
<tr>
<td>Price :</td>
<td><input type="text" name="proprice" id="proprice" /></td>
</tr>
<tr>
<td>Image : </td>
<td><input type="file" name="myimg" id="myimg" /></td>
</tr>
<tr>
<td>Category :</td>
<td>
<?php

$s=mysql_query("select * from `category`");
?>
<select name="Category">
<?php
while($r=mysql_fetch_array($s))
{
	?>
    
    <option value="<?php echo $r['cat_id']; ?>">
    <?php echo $r['cat_name'];
	?>

</option><?php echo $r['cat_name']; ?>
<?php
}
?>
</tr>
<tr>
<td align="center" colspan="3"><input type="submit" name="submit" value="Add product"  /></td>
</tr>
</table>
</form>



<?php
if(isset($_POST['submit']))
{
	
	$n=time();
	$allowedexts=array("gif","jpeg","png","jpg");
	$temp=explode(".",$_FILES["myimg"]["name"]);
	$extension=end($temp);
 move_uploaded_file($_FILES["myimg"]["tmp_name"],"upload/".$n.$_FILES["myimg"]["name"]);
	 $filename=$_FILES["myimg"]["name"];
	 $dest="thumb/".$n.$filename;
	 $desired_width=100;
	 $source_image=imagecreatefromjpeg("upload/".$n.$_FILES["myimg"]["name"]);
	 $width=imagesx($source_image);
	 $height=imagesy($source_image);
	 $desire_height=floor($height*($desired_width/$width));
	 $virtual_image=imagecreatetruecolor($desired_width,$desire_height);
	 imagecopyresampled($virtual_image,$source_image,0,0,0,0,$desired_width,$desire_height,$width,$height);
	 imagejpeg($virtual_image,$dest);	 
	 
	$proname=$_POST['proname'];
	$prodes=$_POST['prodes'];
	$proprice=$_POST['proprice'];
	$proimage=$n.$_FILES["myimg"]["name"];
	$cat_name=$_POST['Category'];
	 $sql="INSERT INTO `product` (`pro_id`, `pro_name`,`pro_des`, `pro_price`,`pro_image`, `cat_id`) VALUES ('', '$proname','$prodes','$proprice','$proimage','$cat_name')";
	$ex=mysql_query($sql);

	header("location:view_prod.php");
}

?>





</body>


</html>