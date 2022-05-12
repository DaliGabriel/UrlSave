<?php

require_once("../database/Connection.php");

//check if the data send from a form is not empy
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
        //data form
        $name = $_POST['first_name_register'];
        $l_name = $_POST['last_name_register'];
        $mail = $_POST['email_register'];
        $pass = $_POST['password_register_confirm'];
        
        //check if email is in the table database
        $query = $conn->prepare( "SELECT * FROM register WHERE email = ?" );
        $query->bind_param( 'd', $mail );
        $query->execute();


        if( $query->fetch() > 0 ) { # If rows are found for query
            echo"<script>
                alert('The Mail Is Already Registered!!!');
                window.location.href='/crud_php_sql/views/register.php';
                </script>";
       }
       else {
            //sql querys to insert data form
            $sql = "INSERT INTO register (name, last_name, email, password) VALUES(?,?,?,?)";
            //prepare query sentence
            $stmt = $conn -> prepare($sql);
            
            //encrypt the password
            $pass = password_hash($pass,PASSWORD_BCRYPT);

            //insert query with the values into a sql database
            $stmt->bind_param("ssss",$name,$l_name,$mail,$pass);
            
            

            if ($stmt -> execute()) {
                $message = "Created User";
                echo $message;
            }else{
                $message ="cant create user";
                echo $message;
            }
            header('location: ../views/login.php');
        }
        
        

}



