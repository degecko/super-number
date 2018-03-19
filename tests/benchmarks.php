<?php

require_once __DIR__ . '/../vendor/autoload.php';

isset($argv[1]) or die('You need to provide a type.');
isset($argv[2]) or die('You need to provide a benchmark name.');
isset($argv[3]) or die('You need to provide a number of repetitions.');

$type = $argv[1];
$benchmark = $argv[2];
$repetitions = (int) $argv[3] ?: 1;

$type();

function b1 ()
{
    global $benchmark, $repetitions;

    if ($benchmark == 'supernumber') {
        foreach (range(1, $repetitions) as $i) {
            $number = new \SuperNumber\SuperNumber($i);
            $number->add(3);
        }
    } else {
        foreach (range(1, $repetitions) as $i) {
            $number = $i;
            $number += 3;
        }
    }
}
