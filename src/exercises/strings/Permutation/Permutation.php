<?php
/**
 * Class Permutation
 *
 * This class isn't finished.  Tim
 */
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
            $newItems = $items;
            list($foo) = array_splice($newItems, $i, 1);
            array_unshift($perms, $foo);
            $this->permutation($newItems, $perms);
            $return = array_merge($return, $this->permutation($newItems, $perms));
        }

        return $return;
    }
}