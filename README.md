# How PHP Type Declarations Actually Work

This is a simple project that shows how PHP 7 type declarations actually work. It highlights that strict types are only ever imposed when PHP files include the `declare(strict_types=1);` statement at the top of them.

The project is made up of five files, `index.php`, `no-strict-types.php`, `with-strict-types.php`, `foo.php` and `bar.php`.

**Public Files:**
- `index.php`: Pulls in and outputs the results of the foo and bar methods. Highlights return types will be imposed in required files with strict types set.
- `no-strict-types.php`: Pulls in and outputs the results of the foo method. Highlights type coercion will be attempted on methods with parameter types imposed when the calling file does not have strict types set.
- `with-strict-types.php`: Pulls in and outputs the results of the foo method. Highlights parameter types will be imposed when the calling file as strict types set.

**Src Files:**
- `foo.php`: Includes the foo method and does not impose type declarations.
- `bar.php`: Includes the bar method and imposes type declarations.

By reviewing the codebase, starting with the `index.php` file, you will be able to see that it is possible to have strict types both on and off in the same application.

## Setup

To use this library simply spin up the contained Docker PHP environment.

```
docker-compose up -d
```

## Usage

Shell into the Docker PHP environment.

```
docker-compose exec php bash
```

Then run the following commands.

```
php public/index.php
```

You should then see the following output:

```
string(3) "123"
Return value of bar() must be of the type string, integer returned
```

```
php public/no-strict-types.php
```

You should then see the following output:

```
string(3) "123"
Argument 1 passed to foo() must be of the type int, array given, called in /var/www/html/public/no-strict-types.php on line 31
```

```
php public/with-strict-types.php
```

You should then see the following output:

```
Argument 1 passed to foo() must be of the type int, string given, called in /var/www/html/public/with-strict-types.php on line 20
```

## Further Information

To learn more about this topic please read my article on the subject along with the PHP RFC.

- [How PHP Type Declarations Actually Work](https://dev.to/robdwaller/how-php-type-declarations-actually-work-1mm5)
- [PHP RFC: Scalar Type Declarations](https://wiki.php.net/rfc/scalar_type_hints_v5)

## Author

Rob Waller [@RobDWaller](https://twitter.com/RobDWaller)
