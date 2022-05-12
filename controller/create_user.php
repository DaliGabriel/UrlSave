<?php

require_once("../database/Connection.php");

if (!empty($_POST['first_name_register']) 
    && 
    !empty($_POST['last_name_register']) 
    && 
    !empty($_POST['email_register'])
    &&
    !empty($_POST['password_register'])
    && 
    !empty($_POST['password_register_confirm'])
    ) 
    {
        $name = $_POST['first_name_register'];
        $l_name = $_POST['last_name_register'];
        $mail = $_POST['email_register'];
        $pass = $_POST['password_register_confirm'];
    
        $sql = "INSERT INTO register (name, last_name, email, password) VALUES(?,?,?,?)";
        $stmt = $conn -> prepare($sql);
        $pass = password_hash($pass,PASSWORD_BCRYPT);
        $stmt->bind_param("ssss",$name,$l_name,$mail,$pass);


        if ($stmt -> execute()) {
            $message = "Created User";
            echo $message;
        }else{
            $message ="cant create user";
            echo $message;
        }

}


header('location: ../views/login.php');
