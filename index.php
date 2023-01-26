<?php

session_start();

$number_validation_regex = "/^\\d+$/";
$onlyLetters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
$onlySymbols = "!.,/';#][=-?><~@:}{+_)(*&^%";
$onlyNumbers = "1234567890";
$characters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!.,/';#][=-?><~@:}{+_)(*&^%1234567890";
$generatedPassword = "";
$charactersLength = strlen($characters);
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
            <h1>Generazione standard</h1>
            <p>per la generazione della tua password verrano utilizzati numeri, simboli e lettere in modo randomico.</p>

            <input type="text" name="numberOfCharacters">
            <button>Generate password</button>
            <br>
            <h1>Selezione avanzata</h1>
            <p>Seleziona la tipologia di caratteri che vuoi sia utilizzata nella tua password</p>
            <p>Puoi selezionare piu' di una categoria</p>
            <input type="checkbox" name="lettersChoise" id="lettersChoise">
            <label for="lettersChoise">Selezione "lettere"</label>
            <br>
            <input type="checkbox" name="numbersChoise" id="numbersChoise">
            <label for="numbersChoise">Selezione "numeri"</label>
            <br>
            <input type="checkbox" name="symbolsChoise" id="symbolsChoise">
            <label for="symbolsChoise">Selezione "simboli"</label>
        </form>

        <h1>

            <?php

            include_once "./functions.php";
            if (isset($_GET['numberOfCharacters']) && preg_match($number_validation_regex, $_GET['numberOfCharacters'])) {
                header('location: ./passwordShower.php');
            }
            ?>
        </h1>
    </main>
</body>

</html>