<?php 
session_start();
include ('serverlogin.php');

if (isset($_POST['processcart'])) {
	
	if (isset($_SESSION['logged_in'])) {
		$usertype = "registered";
		$insertsql = "
	    INSERT INTO orders (cart_id, qty, total, usertype, first_name, last_name, username, email, address_1, address_2, city, state, zipcode)
	    VALUES (
	    '".$_COOKIE['cart_id']."',
	    '".$_POST['cartqty']."',
	    '".$_POST['carttotal']."',
	    '$usertype',
	    '".$_SESSION['firstname']."',
	    '".$_SESSION['lastname']."',
		'".$_SESSION['username']."',
		'".$_SESSION['email']."',
		'".$_SESSION['address_1']."',
		'".$_SESSION['address_2']."',
		'".$_SESSION['city']."',
		'".$_SESSION['state']."',
		'".$_SESSION['zipcode']."'

	    )";

	    $conn->query($insertsql);

	    /*-------------- update order detail tables ---------------*/
	    $cart_id = $_COOKIE['cart_id'];
		$orderdetail = "INSERT INTO orderdetail SELECT * FROM $cart_id";
		$conn->query($orderdetail);


		/*-------------- Delete shopping cart ---------------*/
		$dropcart = "DROP TABLE $cart_id";
		$conn->query($dropcart);

		/*-------------- Delete cookie for new cart ---------------*/
		unset($_COOKIE['cart_id']);
		setcookie('cart_id', '', time() - 3600);

		header("Location: client.php");

	} elseif (!isset($_SESSION['logged_in'])) {
		$usertype = "guest";
		$insertsql = "
	    INSERT INTO orders (cart_id, qty, total, usertype, first_name, last_name, email, address_1, address_2, city, state, zipcode)
	    VALUES (
	    '".$_COOKIE['cart_id']."',
	    '".$_POST['cartqty']."',
	    '".$_POST['carttotal']."',
	    '$usertype',
	    '".$_POST['firstname']."',
	    '".$_POST['lastname']."',
		'".$_POST['email']."',
		'".$_POST['address_1']."',
		'".$_POST['address_2']."',
		'".$_POST['city']."',
		'".$_POST['state']."',
		'".$_POST['zip']."'

	    )";

	    $conn->query($insertsql);

	    /*-------------- update order detail tables ---------------*/
	    $cart_id = $_COOKIE['cart_id'];
		$orderdetail = "INSERT INTO orderdetail SELECT * FROM $cart_id";
		$conn->query($orderdetail);


		/*-------------- Delete shopping cart ---------------*/
		$dropcart = "DROP TABLE $cart_id";
		$conn->query($dropcart);

		/*-------------- Delete cookie for new cart ---------------*/
		unset($_COOKIE['cart_id']);
		setcookie('cart_id', '', time() - 3600);

		
		header("Location: client.php");

	}
	

}

$conn->close();
?>