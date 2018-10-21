<?php
declare(strict_types=1);

set_include_path(getcwd(). ":" .get_include_path());
require getcwd(). '/ut_classes/Add.php';

require 'vendor/autoload.php';

use PHPUnit\Framework\TestCase;
final class AddTest extends TestCase
{
    public function testAddNumber(): void
    {
        $this->assertEquals(
            Add::addNumber(5, 6), 5 + 6
        );
    }
}
