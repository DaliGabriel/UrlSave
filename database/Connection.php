<?php
require_once("config.php");

$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_DB);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}









