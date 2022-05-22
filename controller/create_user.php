<?php

require_once("../database/Connection.php");
session_start();

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
        $name = htmlspecialchars($_POST['first_name_register'], ENT_QUOTES, 'UTF-8');
        $l_name = htmlspecialchars($_POST['last_name_register'], ENT_QUOTES, 'UTF-8');
        $mail = htmlspecialchars($_POST['email_register'], ENT_QUOTES, 'UTF-8');
        $pass = htmlspecialchars($_POST['password_register_confirm'], ENT_QUOTES, 'UTF-8');
        
        //check if email is in the table database
        $query = $conn->prepare( "SELECT * FROM register WHERE email = :mail" );
        $query->bindParam( ':mail', $mail );
        $query->execute();


        if( $query->fetch() > 0 ) 
        { # If rows are found for query
            echo"<script>
                alert('The Mail Is Already Registered!!!');
                window.location.href='/crud_php_sql/views/register.php';
                </script>";
        }
        else {
            //sql querys to insert data form
            $sql = "INSERT INTO register (name, last_name, email, password) VALUES(:name,:lName,:mail,:pass)";
            //prepare query sentence
            $stmt = $conn -> prepare($sql);
            
            //encrypt the password
            $pass = password_hash($pass,PASSWORD_BCRYPT);

            //insert query with the values into a sql database
            $stmt->bindParam(":name",$name);
            $stmt->bindParam(":lName",$l_name);
            $stmt->bindParam(":mail",$mail);
            $stmt->bindParam(":pass",$pass);
            
            

            if ($stmt -> execute()) {
                $message = "Created User";

                echo"<script>
                alert('$message!!!');
                window.location.href='/crud_php_sql/views/login.php';
                </script>";

            }else{
                $message ="cant create user";

                echo"<script>
                alert('$message!!!');
                window.location.href='/crud_php_sql/views/register.php';
                </script>";
                
            }
            
        }
        
        

}



