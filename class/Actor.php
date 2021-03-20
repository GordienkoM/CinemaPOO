<?php

class Actor extends Person{

    public function __construct(string $lastName = "N/A", string $firstName = "N/A", string $sex = "N/A", string $dateOfBirth = "N/A") {

        parent::__construct ($lastName, $firstName, $sex , $dateOfBirth);

    }
   
}