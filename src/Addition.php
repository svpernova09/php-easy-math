<?php

namespace EasyMath;

/**
 * Class Addition
 * @package EasyMath
 */
class Addition
{

    /**
     * Addition two numbers
     * @param float $x
     * @param float $y
     * @return float
     */
    public function add(float $x, float $y): float
    {
        return $x + $y;
    }

    /**
     * Sum many numbers
     * @param float ...$numbers
     * @return float
     */
    static public function sum(float ...$numbers): float
    {
        $sum = 0;

        foreach ($numbers as $number) {
            $sum += $number;
        }

        return $sum;
    }

}