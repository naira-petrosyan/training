<?php
@include("connection.php");
$sql = "CREATE DATABASE IF NOT EXISTS training";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}