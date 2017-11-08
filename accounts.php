<?php 
session_start();

include ('serverlogin.php');
if(isset($_POST['login']) && (!isset($_SESSION['logged_in']))) { 

    $users = "SELECT username, password FROM users"; 
    $userinfo = $conn->query($users); 

    while($row = $userinfo->fetch_assoc()) { 
        
        if ( (($_POST['username']) == ($row['username'])) && (($_POST['password']) == ($row['password'])) ) { 
            $_SESSION['logged_in'] = true;
            $_SESSION['username'] = $row['username'];
        } else { 
           echo "username or password do not match";
        } 

    } 
} 
     
if (isset($_SESSION['logged_in']) == true ) { 
    header("Location: admin.php"); 
}

if (isset($_POST['createaccount'])) {
    $insertsql = "
    INSERT INTO users (first_name, last_name, username, password, address_1, address_2, city, state, zipcode, email)
    VALUES (
    '".$_POST['firstname']."',
    '".$_POST['lastname']."', 
    '".$_POST['username']."', 
    '".$_POST['password']."',
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
