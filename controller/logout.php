<?php

if (isset($_POST['loggout'])) {
    session_start();
    session_destroy();
    header('location: /URLSAVE/views/login.php');
}