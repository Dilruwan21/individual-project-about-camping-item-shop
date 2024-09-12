<!DOCTYPE html>
<html lang="en">

<head>
    <?php session_start(); include("conn_db.php"); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Customer Registration | </title>
    <style>
        /* General Styles */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        .form-container {
            max-width: 500px;
            margin: 150px auto;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        }

        /* Form Heading */
        h2 {
            text-align: center;
            font-weight: bold;
            font-size: 24px;
            color: #343a40;
            margin-bottom: 20px;
        }

        /* Form Styles */
        .form-group {
            margin-bottom: 15px;
            display: flex;
            flex-direction: column;
        }

        .form-group label {
            margin-bottom: 5px;
            font-size: 14px;
            color: #555;
        }

        .form-group input,
        .form-group select {
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 8px;
        }

        .form-group input:focus,
        .form-group select:focus {
            outline: none;
            border-color: #28a745;
        }

        /* Button Styles */
        button.btn {
            width: 100%;
            padding: 12px;
            font-size: 18px;
            background-color: #28a745;
            border: none;
            border-radius: 8px;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button.btn:hover {
            background-color: #218838;
        }

        /* Checkbox Styles */
        .form-check {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .form-check input {
            margin-right: 10px;
        }

        .form-check label {
            font-size: 14px;
            color: #555;
        }

        /* Responsive Design */
        @media (max-width: 576px) {
            .form-container {
                padding: 20px;
                margin: 100px auto;
            }

            button.btn {
                font-size: 16px;
            }
        }
    </style>
</head>

<?php include('nav.php'); ?>

<body>
    <div class="form-container">
        <form method="POST" action="add_cust.php">
            <h2><i class="bi bi-person-plus me-2"></i>Sign Up</h2>

            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Username" minlength="5" maxlength="45" required>
            </div>

            <div class="form-group">
                <label for="pwd">Password</label>
                <input type="password" id="pwd" name="pwd" placeholder="Password" minlength="8" maxlength="45" required>
            </div>

            <div class="form-group">
                <label for="cfpwd">Confirm Password</label>
                <input type="password" id="cfpwd" name="cfpwd" placeholder="Confirm Password" minlength="8" maxlength="45" required>
                <small>Your password must be at least 8 characters long.</small>
            </div>

            <div class="form-group">
                <label for="firstname">First Name</label>
                <input type="text" id="firstname" name="firstname" placeholder="First Name" required>
            </div>

            <div class="form-group">
                <label for="lastname">Last Name</label>
                <input type="text" id="lastname" name="lastname" placeholder="Last Name" required>
            </div>

            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" placeholder="E-mail" required>
            </div>

            <div class="form-group">
                <label for="gender">Your Gender</label>
                <select id="gender" name="gender" required>
                    <option value="-">---</option>
                    <option value="M">Male</option>
                    <option value="F">Female</option>
                </select>
            </div>

            <div class="form-group">
                <label for="type">Your Role</label>
                <select id="type" name="type" required>
                    <option value="-">---</option>
                    <option value="STD">Student</option>
                    <option value="STF">Faculty Staff</option>
                    <option value="GUE">Visitor</option>
                    <option value="OTH">Other</option>
                </select>
            </div>

            <div class="form-check">
                <input type="checkbox" id="tandc" name="tandc" required>
                <label for="tandc">I agree to the terms and conditions and the privacy policy</label>
            </div>

            <button class="btn" type="submit">Sign Up</button>
        </form>
    </div>

    <div class="container mt-4"></div>
    <?php include('footer.php') ?>
</body>

</html>
