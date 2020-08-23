<?php


namespace ArraySorter;

use ArraySorter\ValidDataException as ValidDataException;
use ArraySorter\ValidArrayTypeException as ValidArrayException;

class StringSorter
{
    private $direction;

    /**
     * @param mixed $direction
     */
    public function setDirection(ArraySorterInterface $direction)
    {
        $this->direction = $direction;
    }


    /**
     * @param $array
     * @return mixed
     * @throws ValidArrayTypeException
     * @throws ValidDataException
     */
    public function sort($array){
        $this->validateArray($array);
        return $this->direction->sort($array);
    }


    /**
     * @param $data
     * @throws ValidArrayTypeException
     * @throws ValidDataException
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