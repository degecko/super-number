<?php

require_once __DIR__ . '/../vendor/autoload.php';

function dd () {
    foreach (func_get_args() as $arg) {
        print_r($arg);
        echo PHP_EOL;
    }

    die;
}

function number ($number) {
	return new DeGecko\SuperNumber($number);
}
