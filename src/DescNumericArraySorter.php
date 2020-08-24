<?php


namespace ArraySorter;

/**
 * The class implements methods for sorting numeric arrays
 *
 * @package ArraySorter
 */
class DescNumericArraySorter implements ArraySorterInterface
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
        \rsort($array, SORT_NUMERIC);

        return $array;
    }
}
