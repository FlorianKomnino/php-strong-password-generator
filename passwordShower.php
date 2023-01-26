<?php
session_start();
$number_validation_regex = "/^\\d+$/";
$characters = "!abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ.,/';#][=-?><~@:}{+_)(*&^%1234567890";
$generatedPassword = "";
$charactersLength = strlen($characters);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Generated Password</title>
</head>

<body>
    <h1>
        <?php

        include_once "./functions.php";

        echo $_SESSION['generatedPasswordInDb'];

        ?>
    </h1>
</body>

</html>