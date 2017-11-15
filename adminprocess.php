<?php
session_start();
include ('serverlogin.php');

if (isset($_POST['addnew'])) {
    $insertsql = "
    INSERT INTO products (device, Product_Name, Description, Category, SKU, Stock, Cost, price, Product_Image, Size, Weight, Color)
    VALUES (
    '".$_POST['device']."',
    '".$_POST['productname']."',
    '".$_POST['description']."', 
    '".$_POST['category']."', 
    '".$_POST['sku']."', 
    '".$_POST['qty']."', 
    '".$_POST['cost']."',
    '".$_POST['price']."',
    '".$_POST['image']."', 
    '".$_POST['size']."',
    '".$_POST['weight']."',
    '".$_POST['color']."'
    )";

    $conn->query($insertsql);
    unset($_POST['addnew']);
    header("Location: admin.php");
    
}

if (isset($_POST['edit'])) {
    $updaterecord = "UPDATE products SET 
    device = '".$_POST['device']."',
    Product_Name = '".$_POST['productname']."',
    Description = '".$_POST['description']."',
    Category = '".$_POST['category']."',
    SKU = '".$_POST['sku']."',
    Stock = '".$_POST['qty']."',
    Cost = '".floatval($_POST['cost'])."',
    price = '".floatval($_POST['price'])."',
    Product_Image = '".$_POST['image']."',
    Size = '".$_POST['size']."',
    Weight = '".floatval($_POST['weight'])."',
    Color = '".$_POST['color']."'

    WHERE SKU = '".$_POST['sku']."' ";

    $conn->query($updaterecord);
    unset($_POST['add']);
    header("Location: admin.php");
}

$conn->close();
?>