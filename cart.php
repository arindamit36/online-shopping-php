<?php
session_start();
include("connect.php");
$current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
?>

    
<div class="shopping-cart">
<h2>Your Shopping Cart</h2>
<?php
if(isset($_SESSION["product"]))
{
    $total = 0;
    echo '<ol>';
    foreach ($_SESSION["product"] as $cart_itm)
    {
        echo '<li class="cart-itm">';
        echo '<span class="remove-itm"><a href="cart_update.php?removep='.$cart_itm["code"].'&return_url='.$current_url.'">&times;</a></span>';
        echo '<h3>'.$cart_itm["pro_name"].'</h3>';
        echo '<div class="p-code">P code : '.$cart_itm["pro_id"].'</div>';
        echo '<div class="p-qty">Qty : '.$cart_itm["qty"].'</div>';
        echo '<div class="p-price">Price :'.$currency.$cart_itm["pro_price"].'</div>';
        echo '</li>';
        $subtotal = ($cart_itm["pro_price"]*$cart_itm["qty"]);
        $total = ($total + $subtotal);
    }
    echo '</ol>';
    echo '<span class="check-out-txt"><strong>Total : '.$currency.$total.'</strong> <a href="view_cart.php">Check-out!</a></span>';
	echo '<span class="empty-cart"><a href="cart_update.php?emptycart=1&return_url='.$current_url.'">Empty Cart</a></span>';
}else{
    echo 'Your Cart is empty';
}
?>
</div>
    
</div>

</body>
</html>
