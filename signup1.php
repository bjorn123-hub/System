<?php
// Database connection settings
$db_host = 'localhost';
$db_username = 'your_username';
$db_password = 'your_password';
$db_name = 'mydatabase';

// Create a connection to the database
$conn = new mysqli($db_host, $db_username, $db_password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<?php
// Prepare the query
$stmt = $conn->prepare("INSERT INTO users (fname, uname, pass) VALUES (?, ?, ?)");

// Bind the parameters
$stmt->bind_param("sss", $fname, $uname, $hashedPass);

// Set the parameters
$fname = $_POST["fname"];
$uname = $_POST["uname"];
$hashedPass = password_hash($_POST["pass"], PASSWORD_DEFAULT);

// Execute the query
$stmt->execute();

// Close the statement and connection
$stmt->close();
$conn->close();
?>