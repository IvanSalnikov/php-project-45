<?php

namespace BrainGames\Games\Prime;

use function BrainGames\Engine\startEngine;

function gamePrime(): void
{
    $task = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    $gameData = function () {
        $number = rand(0, 100);
        $question = $number;
        $status = true;
        for ($i = 2; $i < $number; $i++) {
            if ($number % $i === 0) {
                $status = false;
                break;
            }
        }
        $trueAnswer = $status === true ? 'yes' : 'no';
        return [$question, $trueAnswer];
    };
    startEngine($gameData, $task);
}
