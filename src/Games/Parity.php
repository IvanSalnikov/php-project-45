<?php

namespace BrainGames\Games\Parity;

require_once __DIR__ . "/../../vendor/autoload.php";

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\gameEngine;

function gameEven()
{
    $rules = 'Answer "yes" if the number is even, otherwise answer "no".';
    $game = function () {
        $number = rand(0, 100);
        $answer = prompt("Question: $number");
        $result = $number % 2 === 0 ? 'yes' : 'no';
        $check = $answer === $result;
        if ($check === false) {
            line("'$answer' is wrong answer ;(. Correct answer was '$result'.");
        }
        return $check;
    };
    gameEngine($game, $rules);
}
