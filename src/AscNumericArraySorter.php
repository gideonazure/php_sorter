<?php


namespace ArraySorter;

/**
 * The class implements methods for sorting numeric arrays
 *
 * @package ArraySorter
 */
class AscNumericArraySorter implements ArraySorterInterface
{

    /**
     *
     * A method that implements ascending sorting
     *
     * @param array $array Array data to sort
     * @return array Sorted array
     */
    public function sort($array)
    {
        sort($array, SORT_NUMERIC);
        return $array;
    }
}