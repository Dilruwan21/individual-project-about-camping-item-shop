<?php
include('../conn_db.php');
session_start();

// Check if the user is an admin
if (!isset($_SESSION["aid"]) || $_SESSION["utype"] !== "admin") {
    header("location: login.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_image = $_FILES['product_image'];

    // Save the uploaded image in the 'uploads' directory
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($product_image["name"]);
    move_uploaded_file($product_image["tmp_name"], $target_file);

    // Insert the new product into the products table
    $query = "INSERT INTO products (product_name, product_price, product_image) 
              VALUES ('$product_name', '$product_price', '$target_file')";
    if (mysqli_query($mysqli, $query)) {
        header("location: admin_dashboard.php?message=Product added successfully");
    } else {
        echo "Error: " . mysqli_error($mysqli);
    }
}
?>
