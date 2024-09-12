<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout - E-Shop</title>
    <link rel="stylesheet" href="css/checkout.css"> <!-- Checkout-specific CSS -->
</head>
<body>

    <!-- Checkout Form -->
    <section class="checkout">
        <h1>Checkout</h1>
        
        <!-- Order Summary -->
        <div class="order-summary">
            <h2>Your Order</h2>
            <ul>
                <li>Item 1 - $299 <a href="#">Remove</a></li>
                <li>Item 2 - $399 <a href="#">Remove</a></li>
            </ul>
            <p><strong>Subtotal:</strong> $698</p>
            <p><strong>Shipping:</strong> Free</p>
            <p><strong>Total:</strong> $698</p>
        </div>

        <!-- Shipping Information -->
        <form action="order-confirmation.html" method="POST">
            <h2>Shipping Details</h2>
            <input type="text" name="full_name" placeholder="Full Name" required>
            <input type="text" name="address" placeholder="Address" required>
            <input type="text" name="city" placeholder="City" required>
            <input type="text" name="zip" placeholder="Postal Code" required>

            <h2>Payment Information</h2>
            <input type="text" name="card_number" placeholder="Card Number" required>
            <input type="text" name="expiry_date" placeholder="Expiry Date (MM/YY)" required>
            <input type="text" name="cvv" placeholder="CVV" required>

            <button type="submit" class="btn place-order-btn">Place Order</button>
        </form>
    </section>

</body>
</html>
