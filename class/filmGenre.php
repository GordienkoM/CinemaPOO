<?php

class FilmGenre {
    private $_genreName; 
    private $_filmsList;           
    
    public function __construct(string $genreName = "N/A") {
        
        $this->_genreName = $genreName;         // nom de genre
        $this->_filmsList = [];                 // liste des films
        
    }
    
    public function addFilm(Film $film){

        $this->_filmsList[] = $film;
    }

    public function getInfo()
    {
        $result='<h3>Dans le genre "'.$this->_genreName.'" il y a '.count($this->_filmsList).' film(s) :</h3><ul>';

        foreach ($this->_filmsList as $film){
            $result .= "<li>".$film->get_title()."</li>";
        }
        $result .= "</ul>";
        return $result;
    }

    public function get_genreName()
    {
        return $this->_genreName;
    }


    public function set_genreName($_genreName)
    {
        $this->_genreName = $_genreName;

        return $this;
    }
} 