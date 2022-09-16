<?php

namespace BrainGames\Games\Progression;

use function BrainGames\Engine\startEngine;

function gameProgression() : void
{
    $task = 'What number is missing in the progression?';
    $gameData = function () {
        $firstElement = rand(0, 20);
        $difference = rand(2, 5);
        $emptyElement = rand(0, 9);
        $array = [];
        for ($i = 0; $i < 10; $i++) {
            $array [] = $firstElement;
            $firstElement = $firstElement + $difference;
        }
        $trueAnswer = $array[$emptyElement];
        $array[$emptyElement] = '..';
        $string = implode(' ', $array);
        $question = $string;
        return [$question, (string) $trueAnswer];
    };
    startEngine($gameData, $task);
}
