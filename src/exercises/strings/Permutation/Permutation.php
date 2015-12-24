<?php
/**
 * Class Permutation
 *
 * This class isn't finished.  Tim
 */
class Permutation
{
    public function permutate($str)
    {

    }

    private function permutation($items, $perms = [])
    {
        if (empty($items)) {
            return [$perms];
        }

        $return = [];
        for ($i = count($items) - 1; $i >= 0; --$i) {
            $newItems = $items;
            $newPerms = $perms;
            list($foo) = array_splice($newItems, $i, 1);
            array_unshift($newPerms, $foo);
            $this->permutation($newItems, $newPerms);
            $return = array_merge($return, $this->permutation($newItems, $newPerms));
        }

        return $return;
    }
}