<?php


namespace ArraySorter;

class AscNumericArraySorter implements ArraySorterInterface
{

    public function sort($array)
    {
        sort($array, SORT_NUMERIC);
        return $array;
    }
}