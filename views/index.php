<?php
require_once('../controller/show_post.php');
if (!isset($_SESSION['user_id'])) {
    header('location: ./login.php');
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>index</title>
</head>
<body>

    <?php include('./components/navbar.php'); ?>

    <h1 class="text-center font-medium leading-tight text-5xl mt-8 mb-2 text-blue-500">Welcome</h1>

    <?php include('./components/post_table.php'); ?>

</body>
</html>