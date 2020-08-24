<?php


namespace ArraySorter;

/** Interface for classes implementing methods for sorting arrays */
interface ArraySorterInterface
{
    public function sort(array $array) : array;
}
