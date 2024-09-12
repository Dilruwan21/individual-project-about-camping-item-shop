<?php
include("../conn_db.php");
session_start();

// Fetch the orders along with customer name, product name, quantity, price, and subtotal
$order_query = "SELECT * FROM orders";
$order_result = mysqli_query($mysqli, $order_query);

// Check if the query was successful
if (!$order_result) {
    // Output the MySQL error for debugging
    die("Error fetching orders: " . mysqli_error($mysqli));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - E-Shop</title>
    <link rel="stylesheet" href="dashbord.css">
    
    <link rel="stylesheet" href="../css/footer.css">
    
<body>
<?php include('nav.php'); ?>

    <h1>Admin Dashboard</h1>

    <!-- Orders list -->
    <section class="order-list">
        <h2>Order List</h2>
        <table>
            <tr>
                <th>Order ID</th>
                <th>Customer Name</th>
                <th>Product Name</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Subtotal</th>
            </tr>
            <?php
            // Fetch each order and display it in the table
            while ($order = mysqli_fetch_assoc($order_result)) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($order['order_id']) . "</td>";
                echo "<td>" . htmlspecialchars($order['customer_name']) . "</td>";
                echo "<td>" . htmlspecialchars($order['product_name']) . "</td>";
                echo "<td>" . htmlspecialchars($order['quantity']) . "</td>";
                echo "<td>" . htmlspecialchars($order['price']) . "</td>";
                echo "<td>" . htmlspecialchars($order['subtotal']) . "</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </section>

    <!-- Edit menu details form -->
    <section class="edit-menu">
        <h2>Edit Menu Details</h2>
        <form action="" method="post">
            <label for="menu-item-id">Menu Item ID:</label>
            <input type="text" id="menu-item-id" name="menu_item_id" placeholder="Enter menu item ID" required><br>

            <label for="menu-item-name">Menu Item Name:</label>
            <input type="text" id="menu-item-name" name="menu_item_name" placeholder="Enter menu item name" required><br>

            <label for="menu-item-price">Price:</label>
            <input type="text" id="menu-item-price" name="menu_item_price" placeholder="Enter price" required><br>

            <label for="menu-item-photo">Photo URL:</label>
            <input type="text" id="menu-item-photo" name="menu_item_photo" placeholder="Enter photo URL" required><br>

            <button type="submit">Update Menu Item</button>
        </form>
    </section>
    <?php include('../footer.php'); ?>
</body>
</html>

