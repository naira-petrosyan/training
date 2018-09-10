<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

define('DB_HOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_NAME', 'training');


$conn = new mysqli(DB_HOST, DB_USERNAME, '', DB_NAME);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
