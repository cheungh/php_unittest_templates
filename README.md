
### install phpunit
assuming composer has been installed in the running environment
if not, read composer installation guide on howto
`composer require --dev phpunit/phpunit ^7`

### Run as testsuit

`$ phpunit -c phpunit.xml`

### Run individually

`$ phpunit --bootstrap vendor/autoload.php TEST/string_test.php
 $ phpunit --bootstrap vendor/autoload.php TEST/add_test.php
