<?php


namespace ArraySorter;

class DescStringArraySorter implements ArraySorterInterface
{

    public function sort($array)
    {
        rsort($array, SORT_STRING);
        return $array;
    }

}