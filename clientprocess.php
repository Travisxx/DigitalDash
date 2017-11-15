<?php
session_start();
include ('serverlogin.php');


if (isset($_POST['update'])) {
    $updateuser = "UPDATE users SET 
    first_name = '".$_POST['firstname']."',
    last_name = '".$_POST['lastname']."',
    address_1 = '".$_POST['address_1']."',
    address_2 = '".$_POST['address_2']."',
    city = '".$_POST['city']."',
    state = '".$_POST['state']."',
    zipcode = '".$_POST['zip']."',
    email = '".$_POST['email']."'  

    WHERE username = '".$_SESSION['username']."' ";

    $conn->query($updateuser);
    unset($_POST['update']);
    header("Location: client.php");
}

$conn->close();
?>