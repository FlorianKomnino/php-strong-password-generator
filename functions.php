<?php
session_start();




function getRandomNumber($min, $max)
{
    return random_int($min, $max);
}



if (isset($_GET['numberOfCharacters']) && preg_match($number_validation_regex, $_GET['numberOfCharacters'])) {

    if (isset($_GET['lettersChoise']) || isset($_GET['numbersChoise']) || isset($_GET['symbolsChoise'])) {

        $categoriesChosenAddedString =
            (isset($_GET['lettersChoise']) ? $onlyLetters : "") .
            (isset($_GET['numbersChoise']) ? $onlyNumbers : "") .
            (isset($_GET['symbolsChoise']) ? $onlySymbols : "");

        while (strlen($generatedPassword) <  $_GET['numberOfCharacters']) {
            $generatedPassword = $generatedPassword . "{$categoriesChosenAddedString[(getRandomNumber(0,$charactersLength))]}";
        }
    } else {

        while (strlen($generatedPassword) <  $_GET['numberOfCharacters']) {
            $generatedPassword = $generatedPassword . "{$characters[(getRandomNumber(0,$charactersLength))]}";
        }
    }
    $_SESSION['generatedPasswordInDb'] = $generatedPassword;
} elseif (isset($_GET['numberOfCharacters']) && !preg_match($number_validation_regex, $_GET['numberOfCharacters'])) {
    echo "<h1> Devi inserire un numero corretto. </h1>";
}
