<?php

//Class of US Presidents
class Presidents {
    public $firstName;
    public $lastName;

    private $termStart;
    private $termEnd;

    //Constructor
    public function __construct($firstName, $lastName, $termStart, $termEnd) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->termStart = $termStart;
        $this->termEnd = $termEnd;
    }

    /* I didnt add detters becasue we likely wouldn't need to change the presidents info. But if I did it would look like:
        public function setFirstName($firstName) {
        $this->firstName = $firstName;
        } */



    //Method to get the full name of the president
    public function getFullName() {
        return $this->firstName . ' ' . $this->lastName; //Note to self: . concatenates strings in PHP
    }

    //Methods to get the term duration
    public function getTermStart() {
        return $this->termStart;
    }

    public function getTermEnd() {
        return $this->termEnd;
    }   

    //Static Function
    public static function termLimits() {
        return "A president can serve a maximum of two terms in office.";
    }

}



?>