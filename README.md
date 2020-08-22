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
use Serialize\SerializeJson;
use Serialize\SerializeYaml;
use Serialize\SerializeXml;

// create instance of a class
// with specifying the format of the final data as a class property

// for JSON output data
$JSON = new SerializeJson(); 

// for YAML output data
$YAML = new SerializeYaml(); 

// for XML output data
$XML = new SerializeXml();



// and then call  "serialize" method of instance 
// with passing data object

// return class object in JSON format
$JSON->serilalize(/* class object */);

// return class object in YAML format
$YAML->serilalize(/* class object */);

// return class object in XML format
$XML->serilalize(/* class object */);


// if need catch errors and return message use try->catch construction:
try {
    $JSON->serilalize(/* class object */);
} catch (\Exception $e){
    echo $e->getMessage();
}

```

## Demo
For demo use and check the functionality - run the file "SerializeTester.php" from the "/tests" folder

```bash
php SerializeTester.php
```


## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.



## License
[MIT](https://choosealicense.com/licenses/mit/)