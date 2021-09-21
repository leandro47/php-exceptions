<?php

ini_set('log_errors', true);
ini_set('error_log', '/');

function foo(): int
{
    try {
        throw new Exception('akskaj');
    } catch (\Throwable $th) {
        return 2;
    }
}

$var = @$vad;


echo foo() . PHP_EOL; // Retorna 3

