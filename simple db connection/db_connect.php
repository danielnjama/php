<?php
// Database configuration
$servername = "localhost";  // Change if you're using a remote database
$username = "dtechnol_php";         // Database username
$password = "test@1234";             // Database password
$dbname = "dtechnol_php";        // Database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully!";
}
?>
