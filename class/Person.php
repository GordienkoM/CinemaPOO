<?php

class Person {
    protected $_lastName;
    protected $_firstName;
    protected $_sex;
    protected $_dateOfBirth;

    public function __construct(string $lastName = "N/A", string $firstName = "N/A", string $sex = "N/A", string $dateOfBirth = "N/A") {
        $this->_lastName = $lastName;
        $this->_firstName = $firstName;
        $this->_sex = $sex;
        $this->_dateOfBirth = new DateTime ($dateOfBirth);
    }
   
    public function __toString()
    {
        return $this->_firstName." ".$this->_lastName;
    }


    public function get_lastName()
    {
        return $this->_lastName;
    }


    public function set_lastName($_lastName)
    {
        $this->_lastName = $_lastName;

        return $this;
    }

    public function get_firstName()
    {
        return $this->_firstName;
    }

 
    public function set_firstName($_firstName)
    {
        $this->_firstName = $_firstName;

        return $this;
    }


    public function get_sex()
    {
        return $this->_sex;
    }


    public function set_sex($_sex)
    {
        $this->_sex = $_sex;

        return $this;
    }


    public function get_dateOfBirth()
    {
        return $this->_dateOfBirth->format("d-m-Y");
    }


    public function set_dateOfBirth($_dateOfBirth)
    {
        $this->_dateOfBirth = $_dateOfBirth;

        return $this;
    }
}