<?php

$host = "localhost";     // Change only if your MySQL is on another host
$user = "root";          // Default XAMPP/WAMP user
$pass = "";              // Default password is empty in XAMPP/WAMP
$db   = "ecommerceweb";  // Database name from your project info

$conn = mysqli_connect($host, $user, $pass, $db);


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Optional: set character set
mysqli_set_charset($conn, "utf8");


?>
