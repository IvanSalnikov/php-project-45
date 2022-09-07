<?php

namespace BrainGames\Games\Gcd;

require_once __DIR__ . '/../../vendor/autoload.php';

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\gameEngine;

function gameGcd()
{
    $rules = 'Find the greatest common divisor of given numbers.';
    $game = function () {
        $firstItem = rand(1, 100);
        $secondItem = rand(1, 100);
        line("Question: $firstItem $secondItem");
        $answer = prompt("Your answer");
        do {
            $firstItem > $secondItem ? $firstItem = $firstItem % $secondItem : $secondItem = $secondItem % $firstItem;
            $result = $firstItem + $secondItem;
        } while ($firstItem != 0 && $secondItem != 0);
        $check = (int)$answer === $result;
        if ($check === false) {
            line("'$answer' is wrong answer ;(. Correct answer was '$result'.");
        }
        return $check;
    };
    gameEngine($game, $rules);
}
