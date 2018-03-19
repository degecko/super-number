<?php

require_once __DIR__ . '/../vendor/autoload.php';

function dd () {
    foreach (func_get_args() as $arg) {
        print_r($arg);
    }

    die(PHP_EOL);
}

function number ($number) {
	return new SuperNumber\SuperNumber($number);
}
