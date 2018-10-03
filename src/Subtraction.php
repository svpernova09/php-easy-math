<?php

namespace EasyMath;

/**
 * Class Subtraction
 * @package EasyMath
 */
class Subtraction
{

    /**
     * Subtract two numbers
     * @param float $x
     * @param float $y
     * @return float
     */
    public function subtract($x, $y): float
    {
        return $x - $y;
    }

    /**
     * Sub many numbers
     * @param float ...$numbers
     * @return float
     */
    static public function sub(float ...$numbers): float
    {
        $sub = 0;

        foreach ($numbers as $number) {
            $sub -= $number;
        }

        return $sub;
    }

}