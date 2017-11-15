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


<!DOCTYPE html>
<html>
<head>

<?php include 'meta-links.php'; ?>

</head>
<body>
<?php include 'header.php'; ?>

<div class="cartheading">
	<div class="body">
		<h1><i class="fa fa-check" aria-hidden="true"></i> Your order is confirmed!</h1>
	</div>
</div>

<div class="cartcontainer">
	<div class="body">
    <h3>Thanks for shopping! Your order hasn't shipped yet, but we'll send you an email when it does.</h3>
	<h3> Order number: <span style="color: red;">#NIJWF97734B</span> </h3>
	<h3>Reciept Date: <? echo date('Y-m-d H:i:s') ?></h3>
    </div>
</div>

<?php include 'footer.php'; ?>

</body>
</html>

<?php $conn->close(); ?>