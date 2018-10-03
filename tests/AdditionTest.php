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

    public function testEasyMathKnowsHowToSum()
    {
        $this->assertEquals(
            36,
            Addition::sum(1, 5, 6, 9, 15) // = 36
        );

        $this->assertEquals(
            -1,
            Addition::sum(-12, 5, 6) // = -1
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

