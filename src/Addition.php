<?php
namespace EasyMath;

class Addition
{
    public function add($x, $y)
    {
        return $x + $y;
    }
    /**
     * Sum many numbers
     * @param float ...$numbers
     * @return float
     */
    public function sum(float ...$numbers): float
    {
        $sum = 0;

        foreach ($numbers as $number) {
            $sum += $number;
        }

        return $sum;
    }

}