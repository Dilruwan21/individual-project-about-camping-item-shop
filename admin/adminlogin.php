<!DOCTYPE html>
<html lang="en">

<head>
    <?php session_start(); include("../conn_db.php"); ?>
    <meta charset="UTF-8">
    
    <title>Admin Log in |</title>
    <link href="footer.css" rel="stylesheet"> <!-- Bootstrap Icons -->

    <!-- Embedded CSS -->
    <style>
        /* General Body Styles */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f9;
            padding-top: 50px;
            padding-bottom: 50px;
            margin: 0;
        }

        .form-signin {
            max-width: 400px;
            margin: auto;
            background-color: #ffffff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            padding-bottom: 80px;
            margin-bottom: 180px;
            margin-top: 180px
        }

        /* Heading Styles */
        h2 {
            text-align: center;
            font-weight: bold;
            font-size: 24px;
            color: #343a40;
        }

        /* Floating Labels */
        .form-floating .form-control {
            border-radius: 8px;
            padding: 15px 10px;
        }

        .form-floating label {
            padding-left: 15px;
        }

        /* Button Styles */
        button.btn {
            font-size: 18px;
            padding: 10px;
            border-radius: 8px;
            transition: background-color 0.3s ease;
        }

        button.btn:hover {
            background-color: #218838;
        }

        /* Header Image and Container */
       

        .container-fluid {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        /* Responsive Styles */
        @media (max-width: 576px) {
            .form-signin {
                padding: 20px;
                max-width: 100%;
            }

            button.btn {
                font-size: 16px;
                padding: 8px;
            }
        }
    </style>
</head>
<?php include('nav.php')?>

<body class="d-flex flex-column h-100">
    <div class="container form-signin mt-auto">
        <form method="POST" action="check_admin_login.php" class="form-floating">
            <h2 class="mt-5 mb-3 fw-normal text-bold"><i class="bi bi-door-open me-2"></i>Admin Log In</h2>
            <div class="form-floating mb-2">
                <input type="text" class="form-control" id="floatingInput" placeholder="Username" name="username" required>
                <label for="floatingInput">Username</label>
            </div>
            <div class="form-floating mb-2">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="pwd" required>
                <label for="floatingPassword">Password</label>
            </div>
            <button class="w-100 btn btn-success mb-3" type="submit">Log In</button>
        </form>
    </div>
    <?php include('footer.php')?>
</body>

</html>
