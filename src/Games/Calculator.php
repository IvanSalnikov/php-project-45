<?php

namespace BrainGames\Games\Calculator;

use function BrainGames\Engine\startEngine;

function calculate() : void
{
    $task = 'What is the result of the expression?';
    $gameData = function () {
        $array = ['+', '-', '*'];
        $numOfSign = rand(0, 2);
        $firstValue = rand(0, 20);
        $secondValue = rand(0, 10);

        switch ($array[$numOfSign]) {
            case '+':
                $trueAnswer = $firstValue + $secondValue;
                break;
            case '-':
                $trueAnswer = $firstValue - $secondValue;
                break;
            case '*':
                $trueAnswer = $firstValue * $secondValue;
                break;
        }
        $question = "$firstValue $array[$numOfSign] $secondValue";
        return [$question, (string) $trueAnswer];
    };
    startEngine($gameData, $task);
}
