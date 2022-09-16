<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

function startEngine(callable $gameData, string $task): void
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line('Hello, %s!', $name);
    line($task);
    $numberOfRounds = 3;

    for ($round = 1; $round <= $numberOfRounds; $round++) {
        [$question, $trueAnswer] = $gameData();
        $answer = prompt("Question: $question");
        if ($answer === $trueAnswer) {
            line('Correct!');
        } else {
            line("'$answer' is wrong answer ;(. Correct answer was '$trueAnswer'. \n Let's try again, $name!");
            return;
        }
        if ($round === $numberOfRounds) {
            line("Congratulations, $name!");
        }
    }
}
