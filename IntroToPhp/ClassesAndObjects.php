<?php

class Person {
    // constants
    const PI = "3.14";
    const AVG_LIFE_SPAN = "80";

    // static variables
    public static $species = "Homosapien";

    // member variables scope => public / private / protected
    public $firstName = "John"; // default values
    public $lastName = "Singh";
    public $dateOfBirth = "09-04-1994";

    // Constructor - No concept of default constructor -> Give default values instead
    function __construct($firstName = "Dinesh", $lastName = "Singh", $dateOfBirth="04-09-1994") {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->dateOfBirth = $dateOfBirth;
    }

    // member functions
    function getFirstName() {
        return $this->firstName;
    }

    function setFirstName($firstName) {
        $this->firstName = $firstName;
    }

    // static methods
    public static function getSpecies()
    {
        // cannot use $this
        return self::$species;
    }
}

$object = new Person();
$otherObject = new Person("Savya", "Ananda", "07-14-1994");

# ----------------- Accessing Member variables -----------------
echo "first name is ".$object->firstName."\n";

$object->firstName = "Dinesh"; // overiding the value

echo "first name updated as ".$object->firstName."\n";

# ----------------  Accessing Constants -----------------
echo "Average Life Span : ".Person::AVG_LIFE_SPAN;

# ---------------- Accessing Member functions ---------------
$object->setFirstName("Dinesh");

# ---------------- Accessing Static Variables ---------------
echo Person::$species.PHP_EOL;

# ---------------- Accessing Static functions ---------------
echo Person::getSpecies().PHP_EOL;