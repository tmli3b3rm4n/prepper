<?php
/**
 * Class Additive
 *
 * @author Tim Lieberman
 */

namespace src\Exercises\Numbers\Additive\PHP;

class Additive
{
    /**
     * Determines if a given number is additive of it's self.
     *
     * @param $num
     */
    public function isAdditive($num)
    {
        $array = str_split($num);

        if (count($array) < 2) {
            return false;
        }

        $first = $array[0];
        $second = $array[1];

        for ($i = 0; $i < count($array); $i++) {
            if (!($first + $second) == $array[$i+2]) {
                return false;
            }
            $first = $second;
            $second = $first + $second;
        }

        return true;
    }
}