<?php
    include('conn_db.php');
    session_start();  // Start the session at the top

    $username = $_POST["username"];
    $pwd = $_POST["pwd"];

    // Query to check the login details
    $query = "SELECT c_id, c_username, c_firstname, c_lastname FROM customer WHERE
    c_username = '$username' AND c_pwd = '$pwd' LIMIT 0,1";

    $result = $mysqli->query($query);
    if ($result->num_rows == 1) {
        // Successful login
        $row = $result->fetch_array();
        // Set session variables
        $_SESSION["cid"] = $row["c_id"];
        $_SESSION["firstname"] = $row["c_firstname"];
        $_SESSION["lastname"] = $row["c_lastname"];
        $_SESSION["utype"] = "customer";

        // Redirect to index page
        header("location: index.php");
        exit(1);
    } else {
        ?>
        <script>
            alert("You entered wrong username and/or password!");
            history.back();
        </script>
        <?php
    }
?>
