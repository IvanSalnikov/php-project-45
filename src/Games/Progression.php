<?php

namespace BrainGames\Games\Progression;

require_once __DIR__ . '/../../vendor/autoload.php';

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\checker;

function progression()
{
    $firstElement = rand(0, 20);
    $difference = rand(2, 5);
    $emptyElement = rand(0, 9);
    $array = [];
    for ($i = 0; $i < 10; $i++) {
        $array [] = $firstElement;
        $firstElement = $firstElement + $difference;
    }
    $result = $array[$emptyElement];
    $array[$emptyElement] = '..';
    $string = implode(' ', $array);
    line("Question: $string");
    $answer = prompt("Your answer");
    $check = (int) $answer === $result;
    if ($check === false) {
        line("'$answer' is wrong answer ;(. Correct answer was '$result'.");
    } return $check;
}

function progress()
{
    checker('Progression', 'progression');
}
