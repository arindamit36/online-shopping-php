<?php

session_start();
include_once("connect.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>View shopping cart</title>
<link href="style/style.css" rel="stylesheet" type="text/css"></head>
<body>
<?php
include("header.php");
?>
<div id="products-wrapper">
 <h1>Your Cart</h1>
 <div class="view-cart">
 	<?php
    $current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
	if(isset($_SESSION["products"]))
    {
	    $total = 0;
		echo '<form method="post" action="paypal-express-checkout/process.php">';
		echo '<ul>';
		$cart_items = 0;
		foreach ($_SESSION["products"] as $cart_itm)
        {
           $product_code = $cart_itm["code"];
		   //echo "SELECT pro_name,pro_des, pro_price FROM product WHERE pro_id='$product_code' LIMIT 1";
		   $results = mysql_query("SELECT pro_name,pro_des, pro_price FROM product WHERE pro_id='$product_code' LIMIT 1");
		   $obj = mysql_fetch_object($results);
		   
		    echo '<li class="cart-itm">';
			echo '<span class="remove-itm"><a href="cart_update.php?removep='.$cart_itm["code"].'&return_url='.$current_url.'">&times;</a></span>';
			echo '<div class="p-price">'.$obj->pro_price.'</div>';
            echo '<div class="product-info">';
			echo '<h3>'.$obj->pro_name.' (Code :'.$product_code.')</h3> ';
            echo '<div class="p-qty">Qty : '.$cart_itm["qty"].'</div>';
            echo '<div>'.$obj->pro_des.'</div>';
			echo '</div>';
            echo '</li>';
			$subtotal = ($cart_itm["price"]*$cart_itm["qty"]);
			$total = ($total + $subtotal);

			echo '<input type="hidden" name="item_name['.$cart_items.']" value="'.$obj->pro_name.'" />';
			echo '<input type="hidden" name="item_code['.$cart_items.']" value="'.$product_code.'" />';
			echo '<input type="hidden" name="item_desc['.$cart_items.']" value="'.$obj->pro_des.'" />';
			echo '<input type="hidden" name="item_qty['.$cart_items.']" value="'.$cart_itm["qty"].'" />';
			$cart_items ++;
			
        }
    	echo '</ul>';
		echo '<span class="check-out-txt">';
		echo '<strong>Total : '.$total.'</strong>  ';
		echo '</span>';
		echo '</form>';
		
    }else{
		echo 'Your Cart is empty';
	}
	
    ?>
    
    
    
    <form name="_xclick" action="https://www.sandbox.paypal.com/webscr" method="post">
 <input type="hidden" name="cmd" value="_xclick">
 <input type="hidden" name="business" value="arindam.mukherjee1992@gmail.com "><!--//enter your paypal account emailid-->
 <input type="hidden" name="currency_code" value="USD"><!--//enter your currency code-->
 <input type="hidden" name="item_name" value="munchi booth"><!--//enter the item name-->
 <input type="hidden" name="return" value="http://localhost/ari/project75/success.php">
 <!--//url to return once payment is done.-->
 <input type="hidden" name="rate_per_hour"  value="<?php echo $total; ?>">
 <input type="hidden" name="amount" value="<?php echo $rate*$hire_hours; ?>"><!--//amount of transaction needs to be credited to your paypal account-->
 <input type="image"src="http://www.paypal.com/en_US/i/btn/btn_buynow_LG.gif" border="0" name="submit" alt="Make payments with PayPal - it's fast, free and secure!">
  </form>
    
    
    
    
    </div>
</div>

</body>
</html>
