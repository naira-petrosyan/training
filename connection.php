<?php
@include('config.php');
// Create connection
$conn = new mysqli($host, $username, '', $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>