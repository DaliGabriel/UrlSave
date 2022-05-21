<?php
    session_start();
    require_once("../database/Connection.php");

        //Database consulting 
        $query = $conn->prepare( "SELECT * FROM urlsave WHERE email = :email");
        $query->bindParam( ':email', $_SESSION['email']);
        $query->execute();
        $results = $query -> fetchall(PDO::FETCH_OBJ);

        

