<?php

/**
 * This file imposes PHP strict types so when the method is called an error
 * be thrown as the method attempts to return an integer but is meant to
 * return a string.
 */
declare(strict_types=1);

function bar(int $foo): string
{
    return $foo;
}
