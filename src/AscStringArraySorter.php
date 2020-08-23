<?php


namespace ArraySorter;

class AscStringArraySorter implements ArraySorterInterface
{

    public function sort($array)
    {
        sort($array, SORT_STRING);
        return $array;
    }
}