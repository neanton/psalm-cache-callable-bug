# Reproduction Steps

1. `composer install`
2. `./vendor/bin/psalm`
3. modify `app/src/Run.php` by altering echo value
4. `./vendor/bin/psalm`
5. UndefinedClass - src/App/Run.php:7:15 - Class or interface App\Handler does not exist is emited
