<?php

/**
 * This declare strict types has no effect on the code.
 */
declare(strict_types=1);

/**
 * Call in the foo.php and bar.php files.
 */
require __DIR__ . '/../src/foo.php';
require __DIR__ . '/../src/bar.php';

try {
    /**
     * This method will output a string 123.
     */
    var_dump(foo(123));

    /**
     * This method will throw an error.
     */
    var_dump(bar(123));
} catch (Error $e) {

    /**
     * Print out the error message thrown by the bar(123) method
     */
    echo $e->getMessage() . PHP_EOL;
}
