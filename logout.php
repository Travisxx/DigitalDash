<?
    session_start();

    if(isset($_SESSION['logged_in'])) {
    	session_unset($_SESSION['logged_in']);
        session_destroy($_SESSION['logged_in']);
    }
    
    if(isset($_SESSION['logged_in_user'])) {
    	session_unset($_SESSION['logged_in_user']);
        session_destroy($_SESSION['logged_in_user']);
    }
    
    header("Location: login.php");
?>