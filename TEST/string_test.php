<?php
declare(strict_types=1);

set_include_path(getcwd(). ":" .get_include_path());
require getcwd(). '/ut_classes/StringUtility.php';

require 'vendor/autoload.php';

use PHPUnit\Framework\TestCase;
final class StringUtilityTest extends TestCase
{
    public function testStringSubstr(): void
    {
        $this->assertEquals(
            substr("abcd", 0, -1), StringUtility::substrFromStartToRightIndex("abcd", -1)
        );
    }
}
