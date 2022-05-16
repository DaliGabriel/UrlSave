<?php

if (isset($_POST['loggout'])) {
    session_start();
    session_destroy();
    header('location: /crud_php_sql/views/login.php');
}