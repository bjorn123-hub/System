<?php
// db_conn.php

$servername = "localhost";
$username = "root"; // Adjust this based on your MySQL setup
$password = ""; // Adjust this based on your MySQL setup
$dbname = "auth_db"; // Change this to your database name

// Create the connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check if the connection is successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
