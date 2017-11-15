<?php 
session_start();
include ('serverlogin.php');

if(isset($_POST['login']) && (!isset($_SESSION['logged_in']))) { 

    $users = "SELECT first_name, last_name, username, password, userlevel, address_1, address_2, city, state, zipcode, email FROM users"; 
    $userinfo = $conn->query($users); 

    while($row = $userinfo->fetch_assoc()) { 
        
        if ( (($_POST['username']) == ($row['username'])) && ( md5($_POST['password']) == ($row['password']) ) ) { 
            $_SESSION['logged_in'] = true;
            $_SESSION['firstname'] = $row['first_name'];
            $_SESSION['lastname'] = $row['last_name'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['userlevel'] =$row['userlevel'];
            $_SESSION['address_1'] =$row['address_1'];
            $_SESSION['address_2'] =$row['address_2'];
            $_SESSION['city'] =$row['city'];
            $_SESSION['state'] =$row['state'];
            $_SESSION['zipcode'] =$row['zipcode'];
            $_SESSION['email'] =$row['email'];
        } 

    } 
} 
    
if (isset($_SESSION['logged_in'])) { 
    if (isset($_SESSION['userlevel'])) {
        if ( $_SESSION['userlevel'] === 'user') {
           header("Location: client.php");
        } elseif ($_SESSION['userlevel'] === 'admin') {
            header("Location: admin.php");
        }
    } 
}

if (isset($_POST['createaccount'])) {
    $insertsql = "
    INSERT INTO users (first_name, last_name, username, password, userlevel, address_1, address_2, city, state, zipcode, email)
    VALUES (
    '".$_POST['firstname']."',
    '".$_POST['lastname']."', 
    '".$_POST['username']."', 
    '".md5($_POST['password'])."',
    'user',
    '".$_POST['address_1']."',
    '".$_POST['address_2']."', 
    '".$_POST['city']."',
    '".$_POST['state']."',
    '".$_POST['zip']."',
    '".$_POST['email']."'
    
    )";
    $conn->query($insertsql);
    header("Location: client.php");
}

$conn->close();
?>
