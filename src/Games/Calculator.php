<?php

namespace BrainGames\Games\Calculator;

require_once __DIR__ . "/../../vendor/autoload.php";

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\checker;

function calculation()
{
    $array = ['+', '-', '*'];
    $i = rand(0, 2);
    $a = rand(0, 20);
    $b = rand(0, 10);
    switch ($array[$i]) {
        case '+':
            $result = $a + $b;
            break;
        case '-':
            $result = $a - $b;
            break;
        case '*':
            $result = $a * $b;
            break;
    }
    line("Question: $a $array[$i] $b");
    $answer = prompt("Your answer");
    $check = (int) $answer === $result;
    if ($check === false) {
        line("'$answer' is wrong answer ;(. Correct answer was '$result'.");
    } return $check;
}

function calculator()
{
    checker('Calculator', 'calculation');
}
