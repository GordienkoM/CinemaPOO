<?php

class Actor extends Person{
    private $_filmsRolesList; 


    public function __construct(string $lastName = "N/A", string $firstName = "N/A", string $sex = "N/A", string $dateOfBirth = "N/A") {

        parent::__construct ($lastName, $firstName, $sex , $dateOfBirth);
        $this->_filmsRolesList = [];              // liste des films et des roles

    }
   

    public function showFilmography()
    {
        $result='<h3>'.$this.' avait incarné :</h3><ul>';
        foreach ($this->_filmsRolesList as $filmsRoles){
            $result .= '<li>"'.$filmsRoles[1]->get_roleName().'" dans le film "'.$filmsRoles[0]->get_title().'"</li>';
        }
        $result .= '</ul>';
        return $result;
    }

    public function addFilmRole(Film $film, Role $role){

        $this->_filmsRolesList[] = array ($film, $role);
    }



}