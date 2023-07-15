<?php

// 1/75
echo 'Hello, World!';

// 2/75
echo 'King in the North!';

// 3/75
//You know nothing, Jon Snow!

// 4/75
echo 'Robert';
echo 'Stannis';
echo 'Renly';

// 5/75
echo 9780262531962;

//6 /75
echo 'What Is Dead May Never Die';

// 7/75
echo 81/9;

// 8/75
echo 6 - -81;

// 9/75
echo 3**5;
echo -8/-4;

// 10/75
echo 8 / 2 + 5 - -3 / 2;

// 11/75
echo 70 * (3 + 4) / (8 + 2);

// 12/75
echo 5**2 - 3 * 7;

// 13/75
echo '"Khal Drogo\'s favorite word is "athjahakar""';

// 14/75
echo "- Did Joffrey agree?\n- He did. He also said \"I love using \\n\".";

// 15/75
echo "Winter came " . "for the " . "House" . " of Frey.";

// 16/75
echo chr(126) . chr(94) . chr(37);

// 17/75
echo -0.304;

// 18/75
echo '7' - (-8 - -2);

// 19/75
echo (string)((int)2.9) . " times";

// 20/75
$motto = "What Is Dead May Never Die!";
echo $motto;

// 21/75
$name = 'Brienna';
$name = 'anneirB';
print_r($name);

// 22 /75
$myBrothersCount = 2;
print_r($myBrothersCount);

// 23/75
$family = 'Targaryen';
$pet = 'Dragon';
print_r($family);
print_r(' and ');
print_r($pet);

// 24/75

$eurosCount = 100;
$dollarsCount = $eurosCount * 1.25;
$yuanCount = $dollarsCount * 6.91;
echo $dollarsCount, "\n", $yuanCount;

// 25/75
$info = "We couldn't verify you mother's maiden name.";
$intro = "\nHere is important information about your account security.";
$firstName = 'Joffrey';
$greeting = 'Hello';
echo $greeting, ", ", $firstName, "!", $intro, "\n", $info;

// 26/75
$firstNumber = 1.10;
$secondNumber = -100;
echo $firstNumber * $secondNumber;

// 27/75
$king = 'King Balon the 6th';
$firstMagicNum = 6;
$secondMagicNum = 17;
$countNums = $firstMagicNum * $secondMagicNum;
echo $king . ' has ' . $countNums . ' rooms.';

// 28/75
const DRAGONS_BORN_COUNT = 3;

// 29/75
echo __DIR__;

// 30/75
$stark = 'Arya';
echo "Do you want to eat, {$stark}?";

// 31/75
$one = 'Naharis';
$two = 'Mormont';
$three = 'Sand';
echo $one[2], $two[1], $three[3], $two[4], $two[2];

// 32/75
$str = <<<EOT
Lannister, Targaryen, Baratheon, Stark, Tyrell... they're all just spokes on a wheel.
This one's on top, then that one's on top, and on and on it spins, crushing those on the ground.
EOT;
print_r($str);

// 33/75
$company1 = 'Apple';
$company2 = 'Samsung';
echo strlen($company1 . $company2);

// 34/75
$text = 'mount';
echo ucfirst($text);

// 35/75
$number = 10.1234;
echo round($number, 2);

// 36/75
$text = 'Never forget what you are, for surely the world will not';
$simbols = "First: " . $text[0] . "\nLast: " . $text[-1];
echo $simbols;

// 37/75
$minNumber = min(3, 10, 22, -3, 0);
echo $minNumber;

// 38/75
$randomNumber = rand(1, 6);
echo $randomNumber;

// 39/75
$motto = 'Family, Duty, Honor';
echo gettype($motto);

// 40/75
function printMotto()
{
    $text = "Winter is coming";
    print_r($text);
}

// 41/75
function sayHurrayThreeTimes()
{
    return "hurray! hurray! hurray!";
}

// 42/75
function truncate($word, $lenght)
{
    return substr($word, 0, $lenght) . "...";
}

// 43/75
function getHiddenCard($cardNumber, $stastCount = 4)
{
    return str_repeat('*', $stastCount) . substr($cardNumber, 12, 4);
}
// 44/75
function getAge($age)
{
    return floor($age);
}

// 45/75
function isPensioner($age)
{
    return $age >= 60;
}

// 46/75
function isMister($word)
{
    return $word == "Mister";
}

// 47/75
function isInternationalPhone($number)
{
    return $number[0] == "+";
}

// 48/75
function isLeapYear($year)
{
    return ($year % 400 === 0) || (($year % 4 === 0) && ($year % 100 !== 0));
}

// 49/75
function isPalindrome($str) {
    $str = strtolower($str);
    return $str === strrev($str);
}

function isNotPalindrome($str) {
    return !isPalindrome($str);
}

// 50/75
function isNeutralSoldier($firstColor, $secondColor)
{
    return $firstColor !== "red" && $secondColor === "black";
}

// 51/75
function isFalsy($value)
{
    return $value == false;
}

// 52/75
function guessNumber($number)
{
    if ($number === 42)
    {
        return 'You win!';
    }
    return 'Try again!';
}

// 53/75
function normalizeUrl($url)
{
    if (strpos($url, 'http://') === 0)
    {
        $domain = substr($url, 7);
    }
    else
    {
        $domain = $url;
    }
    return "https://{$domain}";
}

// 54/75
function whoIsThisHouseToStarks($lastName)
{
    if ($lastName === "Karstark" || $lastName === "Tully")
    {
        return "friend";
    }
    elseif ($lastName === "Lannister" || $lastName === "Frey")
    {
        return "enemy";
    }
    else
    {
        return "neutral";
    }
}

// 55/75
function flipFlop($str)
{
    return ($str === "flip") ? "flop" : "flip";
}

// 56/75
function getNumberExplanation($number)
{
    switch ($number)
    {
        case 666:
            return 'devil number';
        case 42:
            return 'answer for everything';
        case 7:
            return 'prime number';
        default:
            return 'just a number';
    }
}

// 57/75
function generateAmount($firstNumber, $secondNumber)
{
    if ($firstNumber)
    {
        return $firstNumber;
    }
    else
    {
        return $secondNumber * 3;
    }
}

// 58/75
function printNumbers($firstNumber)
{
    $i = $firstNumber;
    while ($i > 0)
    {
        echo $i;
        echo "\n";
        $i = $i - 1;
    }
    echo 'finished!';
}

// 59/75
function multiplyNumbersFromRange($start, $finish)
{
    $result = 1;

    while ($start <= $finish) {
        $result *= $start;
        $start++;
    }

    return $result;
}

// 60/75
function joinNumbersFromRange($start, $finish)
{
    $result = '';
    while ($start <= $finish)
    {
        $result = $result . $start;
        $start++;
    }
    return $result;
}

// 61/75
function printReversedWordBySymbol($word)
{
    $word = strrev($word);
    $i = 0;
    while ($i <strlen($word))
    {
        echo $word[$i], "\n";
        $i++;
    }
}

// 62/75
function countChars($str, $char)
{
    $i = 0;
    $count = 0;

    while ($i < strlen($str))
    {
        if (strtolower($str[$i]) === strtolower($char))
        {
            $count++;
        }
        $i++;
    }

    return $count;
}

// 63/75
function mysubstr($str, $count)
{
    $i = 0;
    $result = '';

    while ($i < $count)
    {
        $currentChar = $str[$i];
        $result = "{$result}{$currentChar}";
        $i++;
    }
    return $result;
}

// 64/75
function isArgumentsForSubstrCorrect($str, $index, $lenght)
{
    if ($lenght < 0)
    {
        return false;
    }
    elseif ($index < 0)
    {
        return false;
    }
    elseif ($index >= strlen($str))
    {
        return false;
    }
    elseif ($index + $lenght > strlen($str))
    {
        return false;
    }
    return true;
}

// 65/75
function filterString($str, $char)
{
    $i = 0;
    $result = '';

    while ($i < strlen($str))
    {
        if ($str[$i] !== $char)
        {
            $result = "{$result}{$str[$i]}";
        }
        $i++;
    }
    return $result;
}

// 66/75
function makeItFunny($str, $n)
{
    $i = 0;
    $result = '';

    while ($i < strlen($str)) {
        if (($i + 1) % $n === 0) {
            $upperChar = strtoupper($str[$i]);
            $result = "{$result}{$upperChar}";
        } else {
            $result = "{$result}{$str[$i]}";
        }
        $i++;
    }

    return $result;
}

// 67/75
function hasChar($str, $char)
{
    $i = 0;
    while ($i < strlen($str))
    {
        if ($str[$i] === $char)
        {
            return true;
        }
        $i++;
    }
    return false;
}

// 68/75
function sumOfSeries($start, $finish)
{
    $sum = 0;
    for ($i = $start; $i <= $finish; $i += 1)
    {
        $sum += $i;
    }
    return $sum;
}

// 69/75
function invertCase($text)
{
    $result = '';

    for ($i = 0; $i < mb_strlen($text); $i++) {
        $symbol = mb_substr($text, $i, 1);
        $lowerSymbol = mb_strtolower($symbol);
        if ($symbol === $lowerSymbol) {
            $result .= mb_strtoupper($symbol);
        } else {
            $result .= $lowerSymbol;
        }
    }
    return $result;
}

// 70/75
echo setlocale(LC_CTYPE, 0);

// 71/75
return mb_strpos($text, $substr) === 0;

// 72/75
const SECONDS_IN_YEAR = 60 * 60 * 24 * 365;
function getYear($timestamp)
{
    return (int)floor($timestamp/SECONDS_IN_YEAR) + 1970;
}

// 73/75
return date('d/m/Y', $timestamp);

// 74/75
function getHexletBirthday()
{
    return mktime(0, 0, 0, 1, 1, 2012);
}

// 75/75
echo date_default_timezone_get();
