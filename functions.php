<?php

// This is a function

function hotMama() {
    echo "woo, HOT MAMA!";
}

?>


<h1><?php hotMama();?></h1>



<?php


/*

tutorial on youTube @
https://youtu.be/ApP1rgZ9OlY
Part 6

*/

function simplyFunction() {
    echo "Hello World";
}


function sayHello ($name = 'World') {
    echo "Hello $name<br>";
}




sayHello('Friend');


function addNumbers($num1, $num2) {
    return $num1 + $num2;
}

function myAge($yearBorn, $thisYear) {
    return $thisYear - $yearBorn;
}

echo 'What\'s 19 + 85? ' . addNumbers(19,85) . '<br>';

echo 'How old are you turning this year? ' . myAge(1985, 2020) . '<br>';



$myNum = 10;


function addFive($num) {
    $num += 5;
}


function addTen(&$num) {
    $num += 10;
}


addFive($myNum);


echo "Value: $myNum<br>";

addTen($myNum);

echo "Value: $myNum<br>";

?>