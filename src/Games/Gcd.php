<?php

namespace BrainGames\Games\Gcd;

use function BrainGames\Engine\startEngine;

function gameGcd() : void
{
    $task = 'Find the greatest common divisor of given numbers.';
    $gameData = function () {
        $firstItem = rand(1, 100);
        $secondItem = rand(1, 100);
        $question = "$firstItem $secondItem";
        do {
            $firstItem > $secondItem ? $firstItem = $firstItem % $secondItem : $secondItem = $secondItem % $firstItem;
            $trueAnswer = $firstItem + $secondItem;
        } while ($firstItem != 0 && $secondItem != 0);
        return [$question, (string) $trueAnswer];
    };
    startEngine($gameData, $task);
}
