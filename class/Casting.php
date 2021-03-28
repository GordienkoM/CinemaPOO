<?php

class Casting {
    private $_film; 
    private $_castingList;           
    
    public function __construct(Film $film = NULL) {
        
        $this->_film = $film;             // nom de casting
        $this->_castingList = [];         // liste des paire Acteur - Role
        $film->set_casting ($this);       // dès la construction du Casting, celui-ci met sa valeur chez le film concerné
    }
    
    public function addActorRole(Role $role, Actor $actor){

        $role->addActor($actor);                            //ajoute acteur dans la liste des acteurs (_actorsList) à la role concerné
        $actor->addFilmRole( $this->_film, $role);          //ajoute le film et le rol dans la liste des films et des roles (_filmsRolesList) à l'acteur concerné
        $this->_castingList[] = array ($role, $actor);      //ajoute role et acteur dans le tableau _castingList
    }



    public function getInfo()
    {
        $result='<h3>Le casting de film "'.$this->_film->get_title().'" : </h3><ul>';
        foreach ($this->_castingList as $roleActor){
            $result .= "<li>".$roleActor[0]->get_roleName()." a été incarné par ".$roleActor[1]."</li>";
        }
        $result .= "</ul>";
        return $result;
    }

    public function get_film()
    {
        return $this->_film;
    }


    public function set_film($_film)
    {
        $this->_film = $_film;

        return $this;
    }
} 