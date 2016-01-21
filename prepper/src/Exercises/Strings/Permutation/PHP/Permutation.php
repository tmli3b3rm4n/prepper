<?php
/**
 * Class Permutation
 *
 * @author Tim Lieberman
 */

namespace src\Exercises\Strings\Permutation\PHP;

class Permutation
{
    /**
     * Performs a permutation on an array.
     *
     * @param $items
     * @param array $perms
     * @return array
     */
    public function permutate($items, $perms = [])
    {
        if (empty($items)) {
            return [$perms];
        }

        $return = [];
        for ($i = count($items) - 1; $i >= 0; --$i) {
            list($foo) = array_splice($items, $i, 1);
            array_unshift($perms, $foo);
            $this->permutate($items, $perms);
            $return = array_merge($return, $this->permutate($items, $perms));
        }

        return $return;
    }


    /**
     * Determine if one string is a permutation of another
     *
     * @param $string1
     * @param $string2
     * @return bool
     */
    public function isPermutateFamily($string1, $string2)
    {
        if (strlen($string1) != strlen($string2)) {
            return false;
        }

        $permutates = $this->permutate($string1);

        return in_array($string2, $permutates);
    }
}