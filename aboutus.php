<?php
session_start();
include("conn_db.php"); // This will include the $mysqli connection variable
include('nav.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | CAMPING HAVEN</title>
    <link rel="stylesheet" href="css/about.css">
</head>
<body>
    <!-- Header -->

    <section class="breadcrumb-section">
        <div class="breadcrumb">
          <h2>About Us</h2>
        </div>
    </section>
    
    <div class="container">
        <!-- About Us Section -->
        <section class="about-us">
            <div class="image">
                <img src="img/img/a1.jpeg" alt="Camping gear">
            </div>
            <div class="content">
                <h2>About Our Store</h2>
                <h1>Your Trusted Source for Quality Camping Gear</h1>
                <p>
                    At CAMPING HAVEN, we are passionate about the great outdoors and dedicated to providing top-quality camping equipment. Our mission is to equip you with everything you need for your next adventure.
                </p>
                <p>
                    Whether you're embarking on a solo hike or planning a family camping trip, we offer a wide range of gear to ensure you're prepared for anything nature throws your way.
                </p>
                <a href="#learn-more" class="learn-more">Learn More</a>
            </div>
        </section>

        <section class="about-us">
            <div class="me">
                <img src="img/img/a2.jpeg" alt="Our team in action">
            </div>
            <div class="content">
                <h2>Our Journey</h2>
                <h1>Built by Campers, for Campers</h1>
                <p>
                    CAMPING HAVEN was founded in [Year] by a group of outdoor enthusiasts who saw the need for high-quality, reliable camping gear. Since then, we have grown into a trusted source for campers of all levels.
                </p>
                <p>
                    We believe in offering products that are both innovative and durable, ensuring that your outdoor experience is as safe and enjoyable as possible.
                </p>
                <p>
                    Our team is composed of seasoned campers who understand the importance of having the right gear. We test every product to guarantee that it meets the high standards we set for our customers.
                </p>
            </div>
        </section>

        <section id="learn-more" class="about-us">
            <div class="image">
                <img src="img/img/a3.jpeg">
            </div>
            <div class="content">
                <h2>Explore Our Passion for Camping</h2>
                <h1>Why We Do What We Do</h1>
                <p>
                    At CAMPING HAVEN, we believe that every outdoor adventure starts with great gear. Our commitment is to provide high-quality products that make your camping experiences more enjoyable and hassle-free.
                </p>
                <p>
                    From tents and sleeping bags to cooking equipment and outdoor accessories, we carefully select each item to ensure durability, functionality, and comfort.
                </p>
                <p>
                    Our staff is dedicated to helping you find the perfect gear for your next adventure. Whether you're new to camping or a seasoned outdoorsperson, we’re here to offer guidance and advice every step of the way.
                </p>
            </div>
        </section>

    </div>
    <!-- Footer -->
    <footer>
        <?php include('footer.php')?>
    </footer>

</body>
</html>
