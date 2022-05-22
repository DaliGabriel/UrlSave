<?php
    if (isset($_GET['codigo'])) {

        
        
        
        require_once("../database/Connection.php");
        
        //sql querys to insert data form
        $sql = "DELETE FROM urlsave WHERE date = :codigo";
        //prepare query sentence
        $stmt = $conn -> prepare($sql);

        //insert query with the values into a sql database
        $stmt->bindParam(":codigo",$_GET['codigo']);
        
        

        if ($stmt -> execute()) {
            $message = "Register Delete";

            echo"<script>
            alert('$message!!!');
            window.location.href='/crud_php_sql/views/components/show_post.php';
            </script>";

        }else{
            $message ="cant Delete Register";

            echo"<script>
            alert('$message!!!');
            window.location.href='/crud_php_sql/views/components/edit_post.php';
            </script>";
            
        }

            
        }else{
            
            header('location: /crud_php_sql/views/index.php');

        }