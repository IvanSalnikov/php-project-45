<?php

namespace BrainGames\Games\Calculator;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\gameEngine;

function calculate()
{
    $rules = 'What is the result of the expression?';
    $game = function () {
        $array = ['+', '-', '*'];
        $numOfSign = rand(0, 2);
        $firstValue = rand(0, 20);
        $secondValue = rand(0, 10);
        switch ($array[$numOfSign]) {
            case '+':
                $result = $firstValue + $secondValue;
                break;
            case '-':
                $result = $firstValue - $secondValue;
                break;
            case '*':
                $result = $firstValue * $secondValue;
                break;
        }
        line("Question: $firstValue $array[$numOfSign] $secondValue");
        $answer = prompt("Your answer");
        $comparation = (int)$answer === $result;
        if ($comparation === false) {
            line("'$answer' is wrong answer ;(. Correct answer was '$result'.");
        }
        return $comparation;
    };
    gameEngine($game, $rules);
}
