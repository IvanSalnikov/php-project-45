<?php

namespace BrainGames\Games\Prime;

require_once __DIR__ . "/../../vendor/autoload.php";

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\checker;

function prime()
{
    $number = rand(0, 100);
    $answer = prompt("Question: $number");
    $status = true;
    for ($i = 2; $i < $number; $i++) {
        if ($number % $i === 0) {
            $status = false;
            break;
        }
    }
    $result = $status === true ? 'yes' : 'no';
    $check = $result === $answer;
    if ($check === false) {
        line("'$answer' is wrong answer ;(. Correct answer was '$result'.");
    }
    return $check;
}

function prim()
{
    checker('Prime', 'prime');
}
