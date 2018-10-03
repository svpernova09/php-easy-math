<?php
namespace EasyMath\Tests;

use EasyMath\Subtraction;
use PHPUnit\Framework\TestCase;

final class SubtractionTest extends TestCase
{
    /**
     * @param $x
     * @param $y
     * @param $expected
     * @dataProvider mathProvider
     */
    public function testEasyMathKnowsHowToSubtract($x, $y, $expected)
    {
        $math = new Subtraction();

        $this->assertEquals(
            $expected,
            $math->subtract($x, $y)
        );
    }


    public function testEasyMathKnowsHowToSub()
    {
        $this->assertEquals(
            -473,
            Subtraction::sub(1, 5, 6, 9, 452) // = -473
        );

        $this->assertEquals(
            -21,
            Subtraction::sub(15, 4, 2) // = -21
        );
    }

    public function mathProvider()
    {
        return [
            [0, 0, 0],
            [0, 1, -1],
            [1, 0, 1],
            [1, 1, 0],
            [2674, 1337, 1337],
        ];
    }
}

