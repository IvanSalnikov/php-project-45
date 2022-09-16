<?php

namespace BrainGames\Games\Even;

use function BrainGames\Engine\startEngine;

function gameEven() : void
{
    $task = 'Answer "yes" if the number is even, otherwise answer "no".';
    $gameData = function () {
        $number = rand(0, 100);
        $question = $number;
        $trueAnswer = $number % 2 === 0 ? 'yes' : 'no';
        return [$question, $trueAnswer];
    };
    startEngine($gameData, $task);
}