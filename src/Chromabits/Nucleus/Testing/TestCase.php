<?php

namespace Chromabits\Nucleus\Testing;

/**
 * Class TestCase
 *
 * A base test case with some extra assertions
 *
 * @package Chromabits\Nucleus\Testing
 */
class TestCase extends \PHPUnit_Framework_TestCase
{
    /**
     * Asserts that a variable is of a given type.
     *
     * If $expected is an array, each string value will be used in a type
     * check. This is useful for checking if a class also implements certain
     * interfaces.
     *
     * @param string|array $expected
     * @param mixed $actual
     * @param string $message
     */
    public static function assertInstanceOf($expected, $actual, $message = '')
    {
        if (is_array($expected)) {
            foreach ($expected as $expectedSingle) {
                parent::assertInstanceOf($expectedSingle, $actual, $message);
            }

            return;
        }

        parent::assertInstanceOf($expected, $actual, $message);
    }
}
