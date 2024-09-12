<?php
include("conn_db.php");
session_start();

// Check if the user is logged in
if (!isset($_SESSION["cid"])) {
    header("location: login.php");
    exit();
}

// Fetch the latest order details for the logged-in customer
$customer_id = $_SESSION["cid"];
$query = "SELECT * FROM orders WHERE customer_id = '$customer_id' ORDER BY order_id DESC LIMIT 1";
$result = mysqli_query($mysqli, $query);

if ($result && mysqli_num_rows($result) > 0) {
    $order = mysqli_fetch_assoc($result);
} else {
    $order = null;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmation - E-Shop</title>
    <link rel="stylesheet" href="css/confirmation.css"> <!-- You can style this as needed -->
    <script>
        function handlePaymentSelection() {
            var paymentOption = document.getElementById('payment-options').value;
            if (paymentOption === 'paypal') {
                window.location.href = 'https://www.paypal.com/cgi-bin/webscr?cmd=_xclick&business=YOUR_PAYPAL_EMAIL&amount=' + encodeURIComponent(document.getElementById('total-price').value) + '&currency_code=USD&item_name=Order%20Payment';
            } else if (paymentOption === 'stripe') {
                // Redirect to Stripe payment page (example URL, replace with your actual URL)
                window.location.href = 'stripe_payment.php?amount=' + encodeURIComponent(document.getElementById('total-price').value);
            }
        }
    </script>
</head>
<body>

    <?php include('nav.php'); ?>

    <section class="confirmation">
        <h1>Order Confirmation</h1>

        <?php if ($order): ?>
            <p>Thank you for your order, <?php echo htmlspecialchars($order['customer_name']); ?>!</p>
            <p>Your order has been successfully placed. Below are the details:</p>

            <table class="order-details">
                <tr>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Subtotal</th>
                </tr>

                <?php
                // Fetch all the items in the order
                $items_query = "SELECT * FROM orders WHERE customer_id = '$customer_id' ORDER BY order_id DESC LIMIT 1";
                $items_result = mysqli_query($mysqli, $items_query);

                while ($item = mysqli_fetch_assoc($items_result)) {
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($item['product_name']) . "</td>";
                    echo "<td>" . htmlspecialchars($item['quantity']) . "</td>";
                    echo "<td>$" . number_format($item['price'], 2) . "</td>";
                    echo "<td>$" . number_format($item['subtotal'], 2) . "</td>";
                    echo "</tr>";
                }
                ?>

                <tr>
                    <td colspan="3">Total Price</td>
                    <td>$<?php echo number_format($order['total_price'], 2); ?></td>
                </tr>
            </table>

            <p>Your order will be processed soon, and you'll receive a confirmation email.</p>

            <div class="payment-options">
                <h2>Select Your Payment Option</h2>
                <select id="payment-options">
                    <option value="" disabled selected>Select a payment method</option>
                    <option value="paypal">PayPal</option>
                    <option value="stripe">Stripe</option>
                </select>
                <button onclick="handlePaymentSelection()">Proceed to Payment</button>
                <input type="hidden" id="total-price" value="<?php echo number_format($order['total_price'], 2); ?>">
            </div>

        <?php else: ?>
            <p>No recent order found.</p>
        <?php endif; ?>
    </section>

    <?php include('footer.php'); ?>

</body>
</html>

