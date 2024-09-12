<?php
include("conn_db.php");
session_start();

// Check if the user is logged in
if (!isset($_SESSION["cid"])) {
    header("location: login.php");
    exit();
}

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $customer_id = $_POST['customer_id'];
    $customer_name = $_POST['customer_name'];
    $total_price = $_POST['total_price'];

    // Save each product in the cart
    if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $product_id => $product) {
            $product_name = $product['name'];
            $product_price = $product['price'];
            $quantity = $product['quantity'];
            $subtotal = $product_price * $quantity;

            // Insert each product into the orders table
            $query = "INSERT INTO orders (customer_id, customer_name, product_id, product_name, quantity, price, subtotal, total_price) 
                      VALUES ('$customer_id', '$customer_name', '$product_id', '$product_name', '$quantity', '$product_price', '$subtotal', '$total_price')";
            mysqli_query($mysqli, $query);
        }

        // Clear the cart after saving
        unset($_SESSION['cart']);

        // Redirect to a confirmation page
        header("location: order_confirmation.php");
        exit();
    } else {
        echo "Your cart is empty.";
    }
} else {
    echo "No data submitted.";
}
?>
