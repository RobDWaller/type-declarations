<?php

/**
 * This declare strict types has an effect on the code. It will impose the parameter 
 * type requirements contained in the foo.php file.
 */
declare(strict_types=1);

/**
 * Call in the foo.php file.
 */
require __DIR__ . '/../src/foo.php';

try {
    /**
     * This method will throw an error despite the foo.php file not containing a 
     * declare(strict_types=1);. The declare strict type in this file will impose 
     * the integer parameter requirement on the foo method in the foo.php file. 
     */
    var_dump(foo("123"));
} catch (Error $e) {

    /**
     * Print out the error message thrown by the foo("123") method
     */
    echo $e->getMessage() . PHP_EOL;
}
