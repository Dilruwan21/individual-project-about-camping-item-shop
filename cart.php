<?php
// Start the session
session_start();
($_SESSION); // Outputs all session variables
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart - E-Shop</title>
    <link rel="stylesheet" href="css/cartt.css">
</head>
<body>

    <?php include('nav.php'); ?>

    <section class="cart">
        <h1>Shopping Cart</h1>

        <div class="cart-items">
            <?php
            $total = 0; // Initialize total cost

            if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
                echo "<table>";
                echo "<tr><th>Product Name</th><th>Price</th><th>Quantity</th><th>Subtotal</th></tr>";

                // Loop through the cart and display each product
                foreach ($_SESSION['cart'] as $product_id => $product) {
                    $subtotal = $product['price'] * $product['quantity']; // Calculate subtotal for each product
                    $total += $subtotal; // Add to total

                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($product['name']) . "</td>";
                    echo "<td>LKR" . htmlspecialchars($product['price']) . "</td>";
                    echo "<td>" . htmlspecialchars($product['quantity']) . "</td>";
                    echo "<td>LKR" . number_format($subtotal, 2) . "</td>";
                    echo "</tr>";
                }

                echo "<tr><td colspan='3'>Total</td><td>LKR" . number_format($total, 2) . "</td></tr>";
                echo "</table>";
            } else {
                echo "<p>Your cart is empty.</p>";
            }
            ?>

            <!-- Form to submit cart details -->
            <!-- Form to submit cart details -->
<form method="post" action="save_cart.php">
    <input type="hidden" name="customer_id" value="<?php echo $_SESSION['cid']; ?>"> <!-- Customer ID -->
    <input type="hidden" name="customer_name" value="<?php echo $_SESSION['firstname']; ?>"> <!-- Customer Name -->
    <input type="hidden" name="total_price" value="<?php echo $total; ?>"> <!-- Total Price -->

    <!-- Properly formatted button -->
     
    <button type="submit" class="btn">Save Details to Continue</button>
</form>

        </div>
    </section>

    <?php include('footer.php'); ?>

</body>
</html>


