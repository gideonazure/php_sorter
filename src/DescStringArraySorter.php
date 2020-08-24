<?php


namespace ArraySorter;

/**
 * The class implements methods for sorting string arrays
 *
 * @package ArraySorter
 */
class DescStringArraySorter implements ArraySorterInterface
{

    /**
     * A method that implements descending sorting
     *
     * @param array $array Array data to sort
     *
     * @return array Sorted array
     */
    public function sort(array $array) : array
    {
        \rsort($array, SORT_STRING);

        return $array;
    }
}
