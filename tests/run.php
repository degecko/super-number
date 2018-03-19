<?php

require_once __DIR__ . '/../vendor/autoload.php';

eval(sprintf('echo (new \SuperNumber\SuperNumber(%s))%s;', $argv[1], $argv[2]));
die(PHP_EOL);

function dd () {
    foreach (func_get_args() as $arg) {
        print_r($arg);
    }

    die;
}