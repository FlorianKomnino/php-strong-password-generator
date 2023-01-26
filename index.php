<?php

session_start();

$number_validation_regex = "/^\\d+$/";
$characters = "!abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ.,/';#][=-?><~@:}{+_)(*&^%1234567890";
$generatedPassword = "";

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-strong-password-generator</title>
</head>

<body>
    <main>
        <form action="" method="GET">
            <input type="text" name="numberOfCharacters">
            <button>Generate password</button>
        </form>

        <h1>

            <?php
            include_once "./functions.php";

            if (isset($_GET['numberOfCharacters']) && preg_match($number_validation_regex, $_GET['numberOfCharacters'])) {
                for ($i = 0; $i < $_GET['numberOfCharacters']; $i++) {
                    $generatedPassword = $generatedPassword . "{$characters[(getRandomNumber(0, 88))]}";
                }
                echo $generatedPassword;
            } elseif (isset($_GET['numberOfCharacters']) && !preg_match($number_validation_regex, $_GET['numberOfCharacters'])) {
                echo "<h1> Devi inserire un numero corretto. </h1>";
            }

            ?>
        </h1>
    </main>
</body>

</html>