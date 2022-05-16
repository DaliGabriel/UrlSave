<?php
require_once("config.php");



try {
  $conn = new PDO("mysql:host=".HOST.";dbname=".DB, USER, PASS);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}
 








