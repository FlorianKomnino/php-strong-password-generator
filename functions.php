<?php
session_start();


function getRandomNumber($min, $max)
{
    return random_int($min, $max);
}

if (isset($_GET['numberOfCharacters']) && preg_match($number_validation_regex, $_GET['numberOfCharacters'])) {
    while (strlen($generatedPassword) <  $_GET['numberOfCharacters']) {
        $generatedPassword = $generatedPassword . "{$characters[(getRandomNumber(0,$charactersLength))]}";
    }
    echo $generatedPassword;
} elseif (isset($_GET['numberOfCharacters']) && !preg_match($number_validation_regex, $_GET['numberOfCharacters'])) {
    echo "<h1> Devi inserire un numero corretto. </h1>";
}
