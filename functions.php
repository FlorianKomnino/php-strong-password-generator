<?php
session_start();


function getRandomNumber($min, $max)
{
    return random_int($min, $max);
}

$_SESSION['getRundomNumber_0_88'] = getRandomNumber(0, 88);
