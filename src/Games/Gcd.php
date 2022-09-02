<?php

namespace BrainGames\Games\Gcd;

require_once __DIR__ . '/../../vendor/autoload.php';

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\checker;

function gcd()
{
    $a = rand(1, 100);
    $b = rand(1, 100);
    line("Question: $a $b");
    $answer = prompt("Your answer");
    do {
        $a > $b ? $a = $a % $b : $b = $b % $a;
        $result = $a + $b;
    } while ($a != 0 && $b != 0);
    $check = (int) $answer === $result;
    if ($check === false) {
        line("'$answer' is wrong answer ;(. Correct answer was '$result'.");
    } return $check;
}

function findGcd()
{
    checker('Gcd', 'gcd');
}
