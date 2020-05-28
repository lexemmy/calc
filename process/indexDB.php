<?php
    $servername = "us-cdbr-east-05.cleardb.net";
    $username = "bc994d5aac4363";
    $password = "941cc0e5";
    $dbname = "heroku_0b3288a9dbdd471";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error)
    {
        die("Connection failed: " . $conn->connect_error);
    }
?>

