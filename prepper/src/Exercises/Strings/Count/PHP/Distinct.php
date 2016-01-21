<?php
/**
 * Class Distinct
 *
 * @author Tim Lieberman
 */


namespace src\Exercises\Strings\Count\PHP;

/**
 * Class Distinct
 * @package src\Exercises\Strings\Count\PHP
 */
class Distinct
{
    /**
     * Takes a string and returns the distinct character count.
     *
     * @param $string
     * @return array
     */
    public function getDistinctCharCount($string)
    {
        $charCountBag = [];
        foreach (count_chars($string, 1) as $i => $val) {
            if (!ctype_alpha(chr($i))) {
                continue;
            }
            $charCountBag[chr($i)] = $val;
        }

        return $charCountBag;
    }
}