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
    # code...

}


header('location: ../views/login.html');
