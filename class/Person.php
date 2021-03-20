<?php

class Person {
    protected $lastName;
    protected $firstName;
    protected $sex;
    protected $dateOfBirth;

    public function __construct(string $lastName = "N/A", string $firstName = "N/A", string $sex = "N/A", string $dateOfBirth = "N/A") {
        $this->lastName = $lastName;
        $this->firstName = $firstName;
        $this->sex = $sex;
        $this->dateOfBirth = new DateTime ($dateOfBirth);
    }
   

    public function getLastName()
    {
        return $this->lastName;
    }

 
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

 
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }


    public function getSex()
    {
        return $this->sex;
    }

 
    public function setSex($sex)
    {
        $this->sex = $sex;

        return $this;
    }


    public function getDateOfBirth()
    {
        return $this->dateOfBirth->format("d-m-Y");
    }


    public function setDateOfBirth($dateOfBirth)
    {
        $this->dateOfBirth = $dateOfBirth;

        return $this;
    }
}