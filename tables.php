<?php
@include('connection.php');
$tablesSql = "CREATE TABLE IF NOT EXISTS users (id INT NOT NULL AUTO_INCREMENT, first_name VARCHAR(45), last_name VARCHAR(45), username VARCHAR(50) NOT NULL UNIQUE, password VARCHAR(50) NOT NULL, PRIMARY KEY (`id`))";

if ($conn->query($tablesSql) === TRUE) {
    echo "Table users created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}