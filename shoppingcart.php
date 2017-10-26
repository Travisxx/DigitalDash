<?php 
if (isset($_GET['cart_id'])) {
setcookie("item#".$_GET['cart_id'], $_GET['cart_id'] );
header("Location: catalog.php#item".$_GET['cart_id']."");
}
?>