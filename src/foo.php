<?php

/**
 * This method will use type coercion to cast the inputed integer argument to
 * a string value when it is returned.
 */
function foo(int $bar): string
{
    return $bar;
}
