<?php

function foo(): int
{
    try {
        return 1;
    } catch (\Throwable $th) {
        return 2;
    } finally {
        return 3;
    }
}

echo foo() . PHP_EOL; // Retorna 3

