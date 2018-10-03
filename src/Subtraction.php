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