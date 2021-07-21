<?php
include 'Person.php';
# include 'SomeDefinedClass.php'
# include_once 'Person.php'; // Include only once. If SomeDefinedClass also imports Person.php, it will stop from re-importing again
# require 'Person.php'; // include will only throw a warning, if the file is not present. require will throw Fatal-Error

class Author extends Person {
    public $penName = "Pieere Cardien";

    // If author doesn't have a constructor, Person's Constructor is called.

    // Method overloading
    function getFullName() {
        return "Author name is ".$this->firstName." ".$this->lastName; // you can use getters here if private
    }

    function getLastName() {
        return $this->lastName;
    }

    function getDateOfBirth() {
        // return $this->dateOfBirth; // you cannot access private variables. Fatal Error
        return parent::getDateOfBirth(); // similar to super in Java
    }

    function getDob()
    {
        return $this->getDateOfBirth(); // another way to retrieve without causing recursion, when getDateOfBirth functions is not defined.
    }
}


$newAuthor = new Author("Dinesh", "Singh", "04-09-1994");
// Since fullName is available in Author class, it will fetch from there. If a memeber function is not available in class, it will search the base class
echo $newAuthor->getFullName().PHP_EOL; // PHP_EOL is similar to "\n"
echo "First Name of Author is ".$newAuthor->getFirstName().PHP_EOL; // you can do $newAuthor->firstName

echo "Last Name is ".$newAuthor->getLastName().PHP_EOL; // you cannot do $newAuthor->lastName
echo "Date of Birth is ".$newAuthor->getDateOfBirth().PHP_EOL; // returns null.