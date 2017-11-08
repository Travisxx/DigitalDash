<?php 
session_start();
if (isset($_POST['cartsubmit']) && isset($_COOKIE['cart_id'])) {	
	include('serverlogin.php');
	$tablename = $_COOKIE["cart_id"];
	$createsql = "CREATE TABLE $tablename (
		id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		cart_key INT(100) NOT NULL, 
		sku INT(30) NOT NULL,
		qty INT(30) NOT NULL,
		product_id INT(6) NOT NULL,
		price INT(6) NOT NULL,
		color VARCHAR(50) NOT NULL,
		product_name VARCHAR(500) NOT NULL,
		image VARCHAR(500) NOT NULL,
		username VARCHAR(50),
		cart_date TIMESTAMP
		)";
	$conn->query($createsql);

	$insertsql = "
	INSERT INTO $tablename (cart_key, sku, qty, product_id, price, color, product_name, image, username, cart_date)
	VALUES (
	'".$_COOKIE['cart_key']."', 
	'".$_POST['sku']."', 
	'".$_POST['qty']."', 
	'".$_POST['id']."', 
	'".floatval($_POST['price'])."',
	'".$_POST['color']."', 
	'".$_POST['product_name']."',
	'".$_POST['image']."',
	'".isset($_COOKIE['username'])."', 
	'CURRENT_TIMESTAMP');";	
	$conn->query($insertsql);
	$conn->close();	
	header("Location: ".$_SERVER['HTTP_REFERER']."");
}

?>