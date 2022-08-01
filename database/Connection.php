<?php

$USER = 'root';
$PASS = '';
$HOST = 'localhost:3306';
$db = 'login';




try {
  $conn = new PDO("mysql:host=$HOST", $USER, $PASS, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "CREATE DATABASE IF NOT EXISTS " . $db;
  
  $conn->exec($sql);

  //-------------------------------------------------------------------
  try {
    $conn = new PDO("mysql:host=$HOST;dbname=$db", $USER, $PASS);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
    // sql to create table
    $sql = "CREATE TABLE IF NOT EXISTS register (
      id INT(11)  UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      name VARCHAR(60) NOT NULL,
      last_name VARCHAR(60) NOT NULL,
      email VARCHAR(60) NOT NULL,
      password VARCHAR(60) NOT NULL,
      created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
      )";
  
      
    // use exec() because no results are returned
    $conn->exec($sql);

    echo "Table register created successfully";
  } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }

  //-------------------------------------------------------------------
  try {
    $conn = new PDO("mysql:host=$HOST;dbname=$db", $USER, $PASS);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
    // sql to create table
    $sql = "CREATE TABLE IF NOT EXISTS urlsave (
      email VARCHAR(100) NOT NULL,
      url VARCHAR(500) NOT NULL,
      title VARCHAR(100) NOT NULL,
      description VARCHAR(500) NOT NULL,
      date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
      )";
  
      
    // use exec() because no results are returned
    $conn->exec($sql);

    echo "Table urlsave created successfully";
  } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }
  


  

} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


  

  
 








