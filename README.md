# How PHP Type Declarations Actually Work

This is a simple project that shows how PHP 7 type declarations actually work. It highlights that strict types are only ever imposed when PHP files include the `declare(strict_types=1);` statement at the top of them.

The project is made up of three files, `index.php`, `foo.php` and `bar.php`.

- `index.php`: Pulls in and outputs the results of the foo and bar methods.
- `foo.php`: Includes the foo method that does not impose type declarations.
- `bar.php`: Includes the bar method that imposes type declarations and throws an error.

By reviewing the codebase, starting with the `index.php` file, you will be able to see that it is possible to have strict types both on and off in the same application.

## Usage

You can run this project by setting it up as a standard website using Apache or Nginx. Alternatively you can run it on the command line by executing the following command:

```
php public/index.php
```

Output:

```
string(3) "123"
Return value of bar() must be of the type string, integer returned
```

## Further Information

To learn more about this topic please read my article on the subject along with the PHP RFC.

- [How PHP Type Declarations Actually Work](https://dev.to/robdwaller/how-php-type-declarations-actually-work-1mm5)
- [PHP RFC: Scalar Type Declarations](https://wiki.php.net/rfc/scalar_type_hints_v5)

## Author

Rob Waller [@RobDWaller](https://twitter.com/RobDWaller)
