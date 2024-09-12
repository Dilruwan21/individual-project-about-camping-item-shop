<!DOCTYPE html>
<html lang="en">

<head>
    <?php session_start(); include("conn_db.php"); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Log in | </title>
    
    <!-- CSS for the login page -->
    <style>
        /* General Styles */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            
        /* Adjust for the fixed header */
        }

        .form-signin {
            max-width: 400px;
            margin: auto;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            margin-top: 150px;
            padding-bottom: 100px;
            margin-bottom: 150px;
        }

        /* Form Heading */
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

      

        .container-fluid {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        /* Responsive Adjustments */
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
<?php include('nav.php'); ?>

<body class="d-flex flex-column h-100">
   
    <div class="container form-signin mt-auto">
        <form method="POST" action="check_login.php" class="form-floating">
            <h2 class="mt-4 mb-3 fw-normal text-bold"><i class="bi bi-door-open me-2"></i>Log In</h2>
            <div class="form-floating mb-2">
                <input type="text" class="form-control" id="floatingInput" placeholder="Username" name="username" required>
                <label for="floatingInput">Username</label>
            </div>
            <div class="form-floating mb-2">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="pwd" required>
                <label for="floatingPassword">Password</label>
            </div>
            <button class="w-100 btn btn-success mb-3" type="submit">Log In</button>
            <a class="nav nav-item text-decoration-none text-muted mb-2 small" href="admin/adminlogin.php">
                <i class="bi bi-shop me-2"></i>Log in to admin account
            </a>
            <a class="nav nav-item text-decoration-none text-muted mb-2 small" href="cust_forgot_pwd.php">
                <i class="bi bi-key me-2"></i>Forgot your password?
            </a>
            <a class="nav nav-item text-decoration-none text-muted mb-2 small" href="singup.php">
                <i class="bi bi-person-plus me-2"></i>Create your new account
            </a>
        </form>
    </div>

    
</body>
<?php include('footer.php'); ?>

</html>
