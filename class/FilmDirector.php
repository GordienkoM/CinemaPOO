<?php

class FilmDirector extends Person{
    private $_filmsList;

    public function __construct(string $lastName = "N/A", string $firstName = "N/A", string $sex = "N/A", string $dateOfBirth = "N/A") {

        parent::__construct ($lastName, $firstName, $sex , $dateOfBirth);
        $this->_filmsList = [];              // liste des films
    }
  
    public function addFilm(Film $film){

        $this->_filmsList[] = $film;
    }

    public function showFilmography()
    {
        $result='<h3>'.$this.' avait réalisé :</h3><ul>';
        foreach ($this->_filmsList as $film){
            $result .= '<li> film "'.$film->get_title().'"</li>';
        }
        $result .= '</ul>';
        return $result;
    }

}