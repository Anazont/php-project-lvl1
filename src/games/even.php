<?php



namespace BrainGames\games\even;

use function BrainGames\Cli\run;

const DESCRIPTION = "Answer 'yes' if the number is even, other answer 'no'.";
const MAX_RANDOM_VALUE = 99;

/**
 * The function is expect the nunber is even
 *
 * @param integer $num random number
 *
 * @return string
 */
function isEven($num)
{
    return ($num % 2) === 0;
}

/**
 * Function run game even
 *
 * @return void
 */
function runEven()
{
    $getEvenData = function () {
        $question = strval(mt_rand(1, MAX_RANDOM_VALUE));
        $currentAnswer = isEven($question) ? "yes" : "no";
        
        $gameData = [];
        $gameData['question'] = $question;
        $gameData['currentAnswer'] = $currentAnswer;
        return $gameData;
    };
    run($getEvenData, DESCRIPTION);
}
