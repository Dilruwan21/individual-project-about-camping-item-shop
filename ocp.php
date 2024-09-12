<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmation - E-Shop</title>
    <link rel="stylesheet" href="css/ocp.css"> <!-- Link to the confirmation CSS -->
    <link rel="stylesheet" href="css/nav.css"> <!-- Link to the navigation CSS -->
    <link rel="stylesheet" href="css/footer.css"> <!-- Link to the footer CSS -->
</head>
<body>

    <!-- Load Navigation Bar -->
    <div id="navbar"></div>
    <script>
        fetch('nav.html')
        .then(response => response.text())
        .then(data => {
            document.getElementById('navbar').innerHTML = data;
        });
    </script>

    <!-- Confirmation Section -->
    <section class="confirmation">
        <h1>Thank You for Your Order!</h1>
        <p>Your order has been successfully placed. Below are the details:</p>

        <!-- Order Details -->
        <div class="order-details">
            <h2>Order Summary</h2>
            <ul>
                <li>Item 1 - $299</li>
                <li>Item 2 - $399</li>
                <!-- This will dynamically update with the items from the order -->
            </ul>
            <p><strong>Total:</strong> $698</p>

            <h2>Shipping Information</h2>
            <p><strong>Name:</strong> John Doe</p>
            <p><strong>Address:</strong> 123 Main Street, New York, NY 10001</p>

            <h2>Order ID:</h2>
            <p>#123456789</p>
        </div>

        <!-- Back to Home Button -->
        <a href="index.html" class="btn">Back to Home</a>
    </section>

    <!-- Load Footer -->
    <div id="footer"></div>
    <script>
        fetch('footer.html')
        .then(response => response.text())
        .then(data => {
            document.getElementById('footer').innerHTML = data;
        });
    </script>

</body>
</html>
