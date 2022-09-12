<?php

namespace BrainGames\Games\Progression;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\gameEngine;

function gameProgression()
{
    $rules = 'What number is missing in the progression?';
    $game = function () {
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
        $check = (int)$answer === $result;
        if ($check === false) {
            line("'$answer' is wrong answer ;(. Correct answer was '$result'.");
        }
        return $check;
    };
    gameEngine($game, $rules);
}
