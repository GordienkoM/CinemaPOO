<?php

class Role {
    private $_roleName; 
    private $_actorsList;           
    
    public function __construct(string $roleName = "N/A") {

        $this->_roleName = $roleName;    // nom de role
        $this->_actorsList = [];         // liste des acteurs ayant incarné le rôle
        
    }
    
    public function addActor(Actor $actor){

        $this->_actorsList[] = $actor;
    }

    public function getInfo()
    {
        $result='<h3>Le role "'.$this->_roleName.'" était incarné par </h3><ul>';
        foreach ($this->_actorsList as $actor){
            $result .= "<li>".$actor."</li>";
        }
        $result .= "</ul>";
        return $result;
    }

    public function get_roleName()
    {
        return $this->_roleName;
    }


    public function set_roleName($_roleName)
    {
        $this->_roleName = $_roleName;

        return $this;
    }


    public function get_actorsList()
    {
        return $this->_actorsList;
    }



}