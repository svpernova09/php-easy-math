<?php
namespace EasyMath\Tests;

use EasyMath\Subtraction;
use PHPUnit\Framework\TestCase;

class SubtractionTest extends TestCase
{
    /**
     * @param float $x
     * @param float $y
     * @param float $expected
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

    /**
     * @param float $x
     * @param float $y
     * @param float $expected
     * @dataProvider mathProvider
     */
    public function testEasyMathKnowsHowToSub($x, $y, $expected)
    {
        $math = new Subtraction();
        
        $this->assertEquals(
            $expected,
            $math->sub($x, $y)
        );
    }

    public static function mathProvider()
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

