<?php
require_once("config.php");



try {
  $conn = new PDO("mysql:host=".HOST.";dbname=".DB, USER, PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}

$conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 








