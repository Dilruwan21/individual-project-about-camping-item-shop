<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Shop - Menu</title>
    <link rel="stylesheet" href="css/menuitem.css"> <!-- Link to menu-specific CSS -->
    <link rel="stylesheet" href="css/nav.css"> <!-- Link to the navbar CSS -->
    <?php include("conn_db.php");
    
session_start();

// Check if the user is logged in as a customer
if (!isset($_SESSION["cid"]) || $_SESSION["utype"] !== "customer") {
    header("location: login.php");
    exit();
}
?>
</head>
<?php
// Start the session

// Initialize success message
$success_message = "";

// Check if the form is submitted
if (isset($_POST['add_to_cart'])) {
    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];  // Get the product name
    $product_price = $_POST['product_price'];  // Get the product price

    // Add the product to the cart (using session)
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }

    // Check if the product already exists in the cart
    if (isset($_SESSION['cart'][$product_id])) {
        // Increment the quantity if it's already in the cart
        $_SESSION['cart'][$product_id]['quantity']++;
    } else {
        // Add new product to the cart
        $_SESSION['cart'][$product_id] = array(
            'name' => $product_name,
            'price' => $product_price,
            'quantity' => 1
        );
    }

    // Set a success message
    $success_message = " Item added to cart successfully!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smartphones - E-Shop</title>
    <link rel="stylesheet" href="css/menuitem.css">
</head>
<body>

    <?php include('nav.php'); ?>

    <section class="category">
        <h1>Explore Camping Must-Haves</h1>

        <!-- Display success message if item was added to the cart -->
<?php if ($success_message): ?>
    <p class="success-message" style="color: green; font-weight: bold; background-color: #f0f8f0; padding: 10px; border-radius: 5px;">
        <?php echo $success_message; ?>
    </p>
<?php endif; ?>


        <div class="items">
            <div class="item">
                <img src="img/img/c1.jpeg" alt="">
                <h3>Camping Bag 75L</h3>
                <p>4000.00 LKR</p>
                <form method="post" action="">
                    <input type="hidden" name="product_id" value="1">
                    <input type="hidden" name="product_name" value="camping Bag 75L">
                    <input type="hidden" name="product_price" value="4000">
                    <button type="submit" name="add_to_cart" class="btn">Add to Cart</button>
                </form>
            </div>
            
            <div class="item">
                <img src="img/img/c2.jpeg" alt="">
                <h3>Camping Tent</h3>
                <p>20000.00 LKR</p>
                <form method="post" action="">
                    <input type="hidden" name="product_id" value="2">
                    <input type="hidden" name="product_name" value="Camping Tent">
                    <input type="hidden" name="product_price" value="20000">
                    <button type="submit" name="add_to_cart" class="btn">Add to Cart</button>
                </form>
            </div>

            <div class="item">
                <img src="img/img/c3.jpeg" alt="">
                <h3>Hi Power Led torch</h3>
                <p>2500.00 LKR</p>
                <form method="post" action="">
                    <input type="hidden" name="product_id" value="3">
                    <input type="hidden" name="product_name" value="Hi Power torch">
                    <input type="hidden" name="product_price" value="250">
                    <button type="submit" name="add_to_cart" class="btn">Add to Cart</button>
                </form>
            </div>


            <div class="item">
                <img src="img/img/c4.jpeg" alt="">
                <h3>Lether Hat</h3>
                <p>3000.00 LKR</p>
                <form method="post" action="">
                    <input type="hidden" name="product_id" value="4">
                    <input type="hidden" name="product_name" value="Lether Hat">
                    <input type="hidden" name="product_price" value="3000">
                    <button type="submit" name="add_to_cart" class="btn">Add to Cart</button>
                </form>
            </div>

            <div class="item">
                <img src="img/img/c5.jpeg" alt="">
                <h3>Water Bottle 2L</h3>
                <p>2600.00 LKR</p>
                <form method="post" action="">
                    <input type="hidden" name="product_id" value="5">
                    <input type="hidden" name="product_name" value="Water bottle 2L">
                    <input type="hidden" name="product_price" value="2600">
                    <button type="submit" name="add_to_cart" class="btn">Add to Cart</button>
                </form>
            </div>


            <div class="item">
                <img src="img/img/c6.jpeg  ">
                <h3>Water Bottle 5L</h3>
                <p>4000.00 LKR</p>
                <form method="post" action="">
                    <input type="hidden" name="product_id" value="6">
                    <input type="hidden" name="product_name" value="Water Bottle 5L">
                    <input type="hidden" name="product_price" value="4000">
                    <button type="submit" name="add_to_cart" class="btn">Add to Cart</button>
                </form>
            </div>

            <div class="item">
                <img src="img/img/c7.jpeg" alt="">
                <h3>Small Axe</h3>
                <p>6000.00 LKR</p>
                <form method="post" action="">
                    <input type="hidden" name="product_id" value="7">
                    <input type="hidden" name="product_name" value="Small Axe">
                    <input type="hidden" name="product_price" value="6000">
                    <button type="submit" name="add_to_cart" class="btn">Add to Cart</button>
                </form>
            </div>

            <div class="item">
                <img src="img/img/c8.jpeg" alt="">
                <h3>8 Person Camping Tent</h3>
                <p>50000.00 LKR</p>
                <form method="post" action="">
                    <input type="hidden" name="product_id" value="8">
                    <input type="hidden" name="product_name" value="Eight person tent">
                    <input type="hidden" name="product_price" value="50000">
                    <button type="submit" name="add_to_cart" class="btn">Add to Cart</button>
                </form>
            </div>

            <div class="item">
                <img src="img/img/c9.jpeg" alt="Lether Boot">
                <h3>Lether Boot</h3>
                <p>8000.00 LKR</p>
                <form method="post" action="">
                    <input type="hidden" name="product_id" value="9">
                    <input type="hidden" name="product_name" value="Lether Boot">
                    <input type="hidden" name="product_price" value="80000">
                    <button type="submit" name="add_to_cart" class="btn">Add to Cart</button>
                </form>
            </div>
        </div>
    </section>

    <?php include('footer.php'); ?>

</body>
</html>