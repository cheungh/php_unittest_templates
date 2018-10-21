<?php
class StringUtility
{
    public function __construct(){}

    public static function substrFromStartToRightIndex(string $str, int $rightIndex): string
    {
        return substr($str, 0, $rightIndex);
    }

}
