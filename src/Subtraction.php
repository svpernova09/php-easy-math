<?php
namespace EasyMath;

class Subtraction
{
    public function subtract($x, $y)
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