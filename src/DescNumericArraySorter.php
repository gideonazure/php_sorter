<?php


namespace ArraySorter;

class DescNumericArraySorter implements ArraySorterInterface
{

    public function sort($array)
    {
        rsort($array, SORT_NUMERIC);
        return $array;
    }

}