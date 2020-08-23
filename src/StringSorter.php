<?php


namespace ArraySorter;

use ArraySorter\Exception\ValidDataException as ValidDataException;
use ArraySorter\Exception\ValidArrayTypeException as ValidArrayException;

class StringSorter
{
    private $direction;

    /**
     *
     * Setter that sets a parameter as an instance of a class that implements a certain direction of sorting
     *
     * @param mixed $direction Instance of a class that implements sorting
     */
    public function setDirection(ArraySorterInterface $direction)
    {
        $this->direction = $direction;
    }


    /**
     *
     * Implementing a call to the sort method on an instance of the class set to the $direction variable
     *
     * @param array $array  The array to be sorted
     * @return mixed The resulting array after sorting
     * @throws ValidArrayException Exception in case of incorrect array type
     * @throws ValidDataException Exception in case of incorrect data type
     */
    public function sort($array){
        $this->validateArray($array);
        return $this->direction->sort($array);
    }


    /**
     *
     * Method implementing input data validation
     *
     * @param $data
     * @throws ValidArrayException Exception in case of incorrect array type
     * @throws ValidDataException Exception in case of incorrect data type
     */
    private function validateArray($data){
        $firstElem = $data[0];

        if(!is_array($data)) {
            throw new ValidDataException('The passed data is not an array. Please pass right data');
        } else {
            if(!is_numeric($firstElem) && !is_string($firstElem)){
                throw new ValidArrayException('The passed data is not an numeric or strings array. Please pass right array type');
            }
        }
    }
}