<?php

namespace BrainGames\Engine;

require_once __DIR__ . "/../vendor/autoload.php";

use function cli\line;
use function cli\prompt;

function strings(string $nameOfGame)
{
    if ($nameOfGame === 'Parity') {
        line('Answer "yes" if the number is even, otherwise answer "no".');
    } elseif ($nameOfGame === 'Calculator') {
        line('What is the result of the expression?');
    } elseif ($nameOfGame === 'Gcd') {
        line('Find the greatest common divisor of given numbers.');
    } elseif ($nameOfGame === 'Progression') {
        line('What number is missing in the progression?');
    } elseif ($nameOfGame === 'Prime') {
        line('Answer "yes" if given number is prime. Otherwise answer "no".');
    }
}

function checker(string $namespace, string $function)
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line('Hello, %s!', $name);
    strings($namespace);
    $link = "BrainGames\Games\\$namespace\\$function";
    for ($numOfTheQuestion = 1; $numOfTheQuestion <= 3; $numOfTheQuestion++) {
        if (is_callable($link)) {
            $callFunction = call_user_func($link);
        }
        if ($callFunction === true) {
            line('Correct!');
        } elseif ($callFunction === false) {
            line("Let's try again, $name!");
            return;
        }
        if ($numOfTheQuestion === 3) {
            line("Congratulations, $name!");
        }
    }
}
