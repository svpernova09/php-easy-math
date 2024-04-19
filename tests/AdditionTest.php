<?php
namespace EasyMath\Tests;

use EasyMath\Addition;
use PHPUnit\Framework\TestCase;

class AdditionTest extends TestCase
{
    /**
     * @param float $x
     * @param float $y
     * @param float $expected
     * @dataProvider mathProvider
     */
    public function testEasyMathKnowsHowToAdd($x, $y, $expected)
    {
        $math = new Addition();

        $this->assertEquals(
            $expected,
            $math->add($x, $y)
        );
    }

    /**
     * @param float $x
     * @param float $y
     * @param float $expected
     * @dataProvider mathProvider
     */
    public function testEasyMathKnowsHowToSum($x, $y, $expected)
    {
        $math = new Addition();

        $this->assertEquals(
            $expected,
            $math->sum($x, $y)
        );
    }

    public static function mathProvider()
    {
        return [
            [0, 0, 0],
            [0, 1, 1],
            [1, 0, 1],
            [1, 1, 2],
            [1337, 1337, 2674],
        ];
    }
}

