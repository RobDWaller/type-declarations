<?php

/**
 * There is no strict types set in this file. This means it will not impose
 * the parameter type requirements imposed in the foo.php file. Instead it will 
 * attempt type coercion based on the parameter type requirements imposed in the 
 * foo.php file.
 */

/**
 * Call in the foo.php file.
 */
require __DIR__ . '/../src/foo.php';

try {
    /** 
     * The first method call inputs an arguments as a string when the method expects 
     * an integer. The second method call inputs an argument as an array. The lack 
     * of a declare(strict_types=1); means the code will attempt to coerce the 
     * arguments to integers.
     */

    /**
     * This method will output a string 123 because a string can be coerced to an integer.
     */
    var_dump(foo("123"));

    /**
     * This method will throw an error because an array cannot be coerced to an integer.
     */
    var_dump(foo([123]));
} catch (Error $e) {

    /**
     * Print out the error message thrown by the foo([123] method
     */
    echo $e->getMessage() . PHP_EOL;
}
