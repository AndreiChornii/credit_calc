<?php

$file = __DIR__ . '/classes/' . 'creditCalc.php';
include $file;

//echo __DIR__;
//echo $file;

//exit();
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//$agreement_date = readline('Enter agreement date in format yyyy-mm-dd: ');
$agreement_date = new DateTime();
$X = (int)readline('Enter investment sum in $: ');
$R = (float)readline('Enter %: ');
$N = (int)readline('Enter amount of years: ');
echo PHP_EOL;
//echo 'agreement date: ' . $agreement_date . PHP_EOL;
//echo 'investment sum: ' . $X . PHP_EOL;
//echo '%: ' . $R . PHP_EOL;
//echo 'amount of years: ' . $N . PHP_EOL;

$entryPoint = new creditCalc($agreement_date, $X, $R, $N);