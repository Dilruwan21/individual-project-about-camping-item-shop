<?php
session_start();
include("conn_db.php"); // This will include the $mysqli connection variable
include('nav.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact Us | CAMPING HAVEN</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/contact.css">
</head>
<body>
    <!-- Header -->

    <!-- Breadcrumb -->
    <section class="breadcrumb-section">
        <div class="breadcrumb">
            <h2>Contact Us</h2>
        </div>
    </section>
 
    <!-- Contact Details -->
    <section class="contact-details">
        <div class="row">
            <div class="contact__widget">
                <span class="icon_phone"></span>
                <h4>Phone</h4>
                <p>+94 122 456 7890</p>
            </div>
            <div class="contact__widget">
                <span class="icon_pin_alt"></span>
                <h4>Address</h4>
                <p>456 Adventure Lane, Wilderness City</p>
            </div>
            <div class="contact__widget">
                <span class="icon_mail_alt"></span>
                <h4>Email</h4>
                <p>contact@campinghaven.com</p>
            </div>
            <div class="contact__widget">
                <span class="icon_clock_alt"></span>
                <h4>Open Time</h4>
                <p>Mon - Fri: 8 AM - 6 PM</p>
            </div>
        </div>
        
    </section>

    <!-- Contact Form -->
    <section class="contact">
        <div class="container">
            <div class="contact__form">
                <h3>Get in Touch</h3>

                <!-- PHP for Form Handling -->
                <?php
                $name = $email = $message = "";
                $nameErr = $emailErr = $messageErr = "";
                $successMsg = "";

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if (empty($_POST["name"])) {
                        $nameErr = "Name is required";
                    } else {
                        $name = test_input($_POST["name"]);
                        if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
                            $nameErr = "Only letters and white space allowed";
                        }
                    }
                    
                    if (empty($_POST["email"])) {
                        $emailErr = "Email is required";
                    } else {
                        $email = test_input($_POST["email"]);
                        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                            $emailErr = "Invalid email format";
                        }
                    }

                    if (empty($_POST["message"])) {
                        $messageErr = "Message is required";
                    } else {
                        $message = test_input($_POST["message"]);
                    }

                    if (empty($nameErr) && empty($emailErr) && empty($messageErr)) {
                        $sql = "INSERT INTO contact_form_submissions (name, email, message) VALUES (?, ?, ?)";
                        if ($stmt = $mysqli->prepare($sql)) {
                            $stmt->bind_param("sss", $name, $email, $message);
                            if ($stmt->execute()) {
                                $successMsg = "Message sent successfully!";
                                $name = $email = $message = "";
                            } else {
                                $successMsg = "Failed to send message. Please try again later.";
                            }
                            $stmt->close();
                        } else {
                            $successMsg = "Failed to prepare the SQL statement. Please try again later.";
                        }
                    }
                }

                function test_input($data) {
                    $data = trim($data);
                    $data = stripslashes($data);
                    $data = htmlspecialchars($data);
                    return $data;
                }
                ?>

                <!-- Display Success Message -->
                <?php if (!empty($successMsg)): ?>
                    <p class="success"><?php echo $successMsg; ?></p>
                <?php endif; ?>

                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <input type="text" name="name" placeholder="Your Name" value="<?php echo htmlspecialchars($name);?>" required>
                    <span class="error"><?php echo $nameErr;?></span>
                    <input type="email" name="email" placeholder="Your Email" value="<?php echo htmlspecialchars($email);?>" required>
                    <span class="error"><?php echo $emailErr;?></span>
                    <textarea name="message" placeholder="Your Message" required><?php echo htmlspecialchars($message);?></textarea>
                    <span class="error"><?php echo $messageErr;?></span>
                    <button type="submit" class="site-btn">Send Message</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <?php include('footer.php')?>
    </footer>

    <!-- JS -->
    <script src="script.js"></script>
</body>
</html>
