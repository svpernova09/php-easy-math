<?php
/**
 * \EasyMath\Subtraction Class
 */

namespace EasyMath;

/**
 * Class containing subtraction methods
 */
class Subtraction
{
    /**
     * Subtract 2 numbers
     * @param float $x
     * @param float $y
     * @return float
     */
    public function subtract($x, $y)
    {
        return $x - $y;
    }

    /**
     * Sub many numbers
     * @param float $firstNumber
     * @param float|null ...$numbers
     * @return float
     */
    public function sub(float $firstNumber, ?float ...$numbers): float
    {
        $sub = $firstNumber;

        foreach ($numbers as $number) {
            $sub -= $number;
        }

        return $sub;
    }

}