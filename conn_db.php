<?php
    $mysqli= new mysqli("localhost","root","","shop");
    if($mysqli->connect_errno){
        header("location:cerror.php");
        exit(1);
    }

    define('SITE_ROOT',realpath(dirname(__FILE__)));
    date_default_timezone_set('Asia/Colombo');
?>    