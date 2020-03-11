<?php

$file = __DIR__ . '/classes/' . 'creditCalc.php';
include $file;

$agreement_date = new DateTime();
$X = (float)readline('Enter investment sum in $: ');
$R = (float)readline('Enter %: ');
$N = (int)readline('Enter amount of years: ');
echo PHP_EOL;
//echo 'agreement date: ' . $agreement_date . PHP_EOL;
//echo 'investment sum: ' . $X . PHP_EOL;
//echo '%: ' . $R . PHP_EOL;
//echo 'amount of years: ' . $N . PHP_EOL;

$entryPoint = new creditCalc($agreement_date, $X, $R, $N);