<?php

// phpcs:disable PSR1.Files.SideEffects

namespace BrainEven\Parity;

require_once __DIR__ . "/../vendor/autoload.php";

use function cli\line;
use function cli\prompt;

function gameIsParity()
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line('Hello, %s!', $name);
    line('Answer "yes" if the number is even, otherwise answer "no".');
    for ($i = 1; $i <= 3; $i++) {
        $number = rand(0, 100);
        $check = ($number % 2 === 0);
        $answer = prompt("Question: $number");
        if ($answer === 'yes' && $check === true) {
            line('Correct');
        } elseif ($answer !== 'yes' && $check === true) {
            line("'$answer' is wrong answer ;(. Correct answer was 'no'. \n Let's try again, $name!");
            return;
        } elseif ($answer === 'no' && $check === false) {
            line('Correct');
        } elseif ($answer !== 'no' && $check === false) {
            line("'$answer' is wrong answer ;(. Correct answer was 'no'. \n Let's try again, $name!");
            return;
        }
    } line("Congratulations, $name!");
}

