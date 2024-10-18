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