<?php
class Person {
    public $firstName = "John"; // default values
    protected $lastName = "Singh";
    private $dateOfBirth = "09-04-1994";

    function __construct($firstName = "Dinesh", $lastName = "Singh", $dateOfBirth="04-09-1994") {
        echo "Inside Person Constructor".PHP_EOL;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->dateOfBirth = $dateOfBirth;
    }


    function getFullName() {
        return "Full Name is ".$this->firstName." ".$this->lastName;
    }

    // setters and getters
    function getFirstName() {
        return $this->firstName;
    }

    function setFirstName($firstName) {
        $this->firstName = $firstName;
    }

    function getLastName() {
        return $this->lastName;
    }

    function setLastName($lastName) {
        $this->lastName = $lastName;
    }
    function getDateOfBirth() {
        return $this->dateOfBirth;
    }

    function setDateOfBirth($dob) {
        $this->dateOfBirth = $dob;
    }
}
