<?php
namespace EasyMath\Tests;

use EasyMath\Addition;
use PHPUnit\Framework\TestCase;

final class AdditionTest extends TestCase
{
    /**
     * @param $x
     * @param $y
     * @param $expected
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
     * @param $x
     * @param $y
     * @param $expected
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

    public function mathProvider()
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

