Array sorter
===============

This project based on a "default-project" structure package for PHP projects and help sort array of numbers or strings.  



## Installation

Use the composer [package](https://packagist.org/packages/gideonazure/array_sorter) to install class serializer.

```bash
composer require gideonazure/array_sorter
```


## Usage

```php
// require needed class to your project
use \ArraySorter\StringSorter;
use \ArraySorter\AscStringArraySorter;
use \ArraySorter\DescStringArraySorter;
use \ArraySorter\NumericSorter;
use \ArraySorter\AscNumericArraySorter;
use \ArraySorter\DescNumericArraySorter;
use \ArraySorter\Exception\ValidArrayTypeException;
use \ArraySorter\Exception\ValidDataException;

// Create instance of a class...

// ...for sort numeric array data
$numeric = new NumericSorter();

// ...for sort strings array data
$string = new StringSorter();


// set an instance of a class implementing sort direction as a property for numeric arrays
$numeric->setDirection(new AscNumericArraySorter()); // for ascending sorting
$numeric->setDirection(new DescNumericArraySorter()); // for descending sorting

// set an instance of a class implementing sort direction as a property for strings arrays
$string->setDirection(new AscStringArraySorter()); // for ascending sorting
$string->setDirection(new DescStringArraySorter()); // for descending sorting


// and then call  "sort" method of instance 
// with passing array data

// return numeric arrays
$result = $numeric->sort(/* numeric array data */);

// return strings array
$result = $string->sort(/* strings array data  */);


// if need catch errors and return message use try->catch construction:
try {
    $result = $string->sort($stringArray);
} catch (ValidDataException $e){
    echo $e->getMessage(); 
} catch (ValidArrayTypeException $e) {
    echo $e->getMessage(); 
}

```

## Demo
For demo use and check the functionality - run the file "SorterTest.php" from the "/tests" folder

```bash
php SorterTest.php
```


## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.



## License
[MIT](https://choosealicense.com/licenses/mit/)