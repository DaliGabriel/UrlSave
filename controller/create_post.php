<?php

session_start();

require_once("../database/Connection.php");

if(isset($_POST['url']) | isset($_POST['title']) | isset($_POST['description'])){

    

    //sql querys to insert data form
    $sql = "INSERT INTO urlsave (email, url, title,  description) VALUES(:mail,:url,:title,:description)";
    //prepare query sentence
    $stmt = $conn -> prepare($sql);

    //insert query with the values into a sql database
    $stmt->bindParam(":mail",$_SESSION['email']);
    $stmt->bindParam(":url",$_POST['url']);
    $stmt->bindParam(":title",$_POST['title']);
    $stmt->bindParam(":description",$_POST['description']);
    
    

    if ($stmt -> execute()) {
        $message = "Register created";

        echo"<script>
        alert('$message!!!');
        window.location.href='/crud_php_sql/views/components/show_post.php';
        </script>";

    }else{
        $message ="cant create Register";

        echo"<script>
        alert('$message!!!');
        window.location.href='/crud_php_sql/views/components/create_post.php';
        </script>";
        
    }
    
}else{
    header('location: /crud_php_sql/views/components/create_post.php');
}