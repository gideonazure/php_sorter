#!/usr/bin/env php
<?php

require_once __DIR__ . '/../vendor/autoload.php';

use \ArraySorter\StringSorter;
use \ArraySorter\AscStringArraySorter;
use \ArraySorter\DescStringArraySorter;
use \ArraySorter\NumericSorter;
use \ArraySorter\AscNumericArraySorter;
use \ArraySorter\DescNumericArraySorter;
use \ArraySorter\Exception\ValidArrayTypeException;
use \ArraySorter\Exception\ValidDataException;

$numericArray = [1,33, 3, 75, 21, 4, 124, 6];
$stringArray = ['a', 'f', 'b', 'h', 'd', 'e'];
$incorrectArray = [['damn'], ['this'], ['is'], ['not'], ['array'], ['324fgerg']];

echo 'Numeric array:' . \PHP_EOL;
\print_r($numericArray);

$numeric = new NumericSorter();
$numeric->setDirection(new AscNumericArraySorter());

try {
    $numericAsc = $numeric->sort($numericArray);

    echo \PHP_EOL . 'ASC numeric array:' . \PHP_EOL;
    \print_r($numericAsc);
} catch (ValidDataException $e) {
    echo $e->getMessage() . \PHP_EOL;
} catch (ValidArrayTypeException $e) {
    echo $e->getMessage() . \PHP_EOL;
}


$numeric->setDirection(new DescNumericArraySorter());

try {
    $numericDesc = $numeric->sort($numericArray);

    echo \PHP_EOL . 'DESC numeric array:' . \PHP_EOL;
    \print_r($numericDesc);
} catch (ValidDataException $e) {
    echo $e->getMessage() . \PHP_EOL;
} catch (ValidArrayTypeException $e) {
    echo $e->getMessage() . \PHP_EOL;
}


echo \PHP_EOL . \PHP_EOL . 'String array:' . \PHP_EOL;
\print_r($stringArray);

$string = new StringSorter();
$string->setDirection(new AscStringArraySorter());

try {
    $stringAsc = $string->sort($stringArray);

    echo \PHP_EOL . 'ASC string array:' . \PHP_EOL;
    \print_r($stringAsc);
} catch (ValidDataException $e) {
    echo $e->getMessage() . \PHP_EOL;
} catch (ValidArrayTypeException $e) {
    echo $e->getMessage() . \PHP_EOL;
}


$string->setDirection(new DescStringArraySorter());

try {
    $stringDesc = $string->sort($stringArray);

    echo \PHP_EOL . 'DESC string array' . \PHP_EOL;
    \print_r($stringDesc);
} catch (ValidDataException $e) {
    echo $e->getMessage() . \PHP_EOL;
} catch (ValidArrayTypeException $e) {
    echo $e->getMessage() . \PHP_EOL;
}

echo \PHP_EOL . \PHP_EOL . 'Exception examples:' . \PHP_EOL;

$exExample = new StringSorter();
$exExample->setDirection(new AscStringArraySorter());

try {
    $wrongArray = $exExample->sort($incorrectArray);

    echo \PHP_EOL . 'Wrong array type:' . \PHP_EOL;
    \print_r($wrongArray);
} catch (ValidDataException $e) {
    echo $e->getMessage() . \PHP_EOL;
} catch (ValidArrayTypeException $e) {
    echo $e->getMessage() . \PHP_EOL;
}


$exExample->setDirection(new DescStringArraySorter());

try {
    $wrongData = $exExample->sort('Just some string');

    echo \PHP_EOL . 'Wrong passed data' . \PHP_EOL;
    \print_r($wrongData);
} catch (ValidDataException $e) {
    echo $e->getMessage() . \PHP_EOL;
} catch (ValidArrayTypeException $e) {
    echo $e->getMessage() . \PHP_EOL;
}
