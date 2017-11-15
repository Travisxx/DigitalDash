<?php
session_start();
include ('serverlogin.php');

if (isset($_POST['submitreview'])) {

    /*---------------- add review to table ----------------*/
    $productsku = $_POST['sku'];

	$insertsql = "
    INSERT INTO reviews (review_date, sku, rating, review, user)
    VALUES (
    CURRENT_TIMESTAMP,
    '".$_POST['sku']."',
    '".$_POST['rating']."',
    '".$_POST['reviewtext']."',
    '".$_SESSION['username']."'
	)";
    $conn->query($insertsql);

    /*---------------- Get Rows and Ratings ----------------*/

    $totalstars = 0;
    $stars = "SELECT rating FROM reviews";
    $starsresults = $conn->query($stars);
    while ($starrating = $starsresults->fetch_assoc()) {
        $totalstars += $starrating['rating'];
        $starratingrows = mysqli_num_rows($starsresults);
    } 
    
    echo $totalstars;
    echo $starratingrows;
    $staraverage = round($totalstars / $starratingrows);
    echo $staraverage;

    /*---------------- add total rating to product ----------------*/    


    $addratingsql = "
    UPDATE products
    SET rating = $staraverage
    WHERE SKU='".$productsku."'
    ";
    $conn->query($addratingsql);   
    unset($_POST['submitreview']);
    header("location: ".$_SERVER['HTTP_REFERER']."");
}
$conn->close();
?>