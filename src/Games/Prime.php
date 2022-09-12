<?php

namespace BrainGames\Games\Prime;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\gameEngine;

function gamePrime()
{
    $rules = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    $game = function () {
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
    };
    gameEngine($game, $rules);
}
