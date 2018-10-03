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
        $this->assertEquals(
            $expected,
            Addition::add($x, $y)
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

