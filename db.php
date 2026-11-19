<?php
$host = "localhost";
$user = "root"; // Default username in XAMPP/WAMP
$pass = ""; // Default password is empty
$dbname = "library_db";

$conn = mysqli_connect($host, $user, $pass, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>