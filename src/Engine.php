<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

function gameEngine(callable $game, string $rules)
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line('Hello, %s!', $name);
    line($rules);
    for ($numOfTheQuestion = 1; $numOfTheQuestion <= 3; $numOfTheQuestion++) {
        $function = $game();
        if ($function === true) {
            line('Correct!');
        } elseif ($function === false) {
            line("Let's try again, $name!");
            return;
        }
        if ($numOfTheQuestion === 3) {
            line("Congratulations, $name!");
        }
    }
}
