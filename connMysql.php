<?php
    $db_host = "localhost";
    $db_username = "root";
    $db_password = "1234";

    $db_link = @mysqli_connect($db_host, $db_username,  $db_password);
    if(!$db_link)  die("Failed to connect to database");

    //設定字元集與編碼
    mysqli_query($db_link, "SET NAMES utf8")
?>