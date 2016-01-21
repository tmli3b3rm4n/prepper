<?php
/**
 * Class Reverse
 *
 * @author Tim Lieberman
 */

namespace src\Exercises\Strings\Order\PHP;

/**
 * Class Reverse
 * @package src\Exercises\Strings\Order\PHP
 */
class Reverse
{
    /**
     * Takes a string and reverses it.  This is alternative way to revers string.
     *
     * @param $string
     * @return string
     */
    public function reverse($string)
    {
        preg_match_all('/./', $string, $aString);
        return join('', array_reverse($aString[0]));
    }
}