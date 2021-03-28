<?php

class Film  {

    private $_title;                // titre de film
    private $_releaseDate;          // date de sortie de film en France 
    private $_duration;             // durée de film  (en minutes)
    private $_filmDirector;         // réalisateur de film
    private $_synopsis;
    private $_casting;
    private $_filmGenre;
    

    public function __construct(string $title = "N/A", string  $releaseDate = "N/A", int $duration = 0, FilmDirector $filmDirector = NULL, FilmGenre $filmGenre = NULL ) {
       
        $this->_title = $title;
        $this->_releaseDate = new DateTime ($releaseDate);
        $this->_duration = $duration;
        $this->_filmDirector = $filmDirector;
        $this->_synopsis = "";
        $this->_casting = NULL;
        $this->_filmGenre = $filmGenre;
        $this->_filmGenre->addFilm($this);              // dès la construction du Film, celui-ci s'ajoute automatiquement chez le genre de film concerné
        $this->_filmDirector->addFilm($this);           // dès la construction du Film, celui-ci s'ajoute automatiquement chez le réalisateur de film concerné
    }

    

    public function get_title()
    {
        return $this->_title;
    }


    public function set_title($_title)
    {
        $this->_title = $_title;

        return $this;
    }


    public function get_releaseDate()
    {
        return $this->_releaseDate->format("d-m-Y");
    }

 
    public function set_releaseDate($_releaseDate)
    {
        $this->_releaseDate = $_releaseDate;

        return $this;
    }


    public function get_duration()
    {
        return $this->_duration;
    }


    public function set_duration($_duration)
    {
        $this->_duration = $_duration;

        return $this;
    }


    public function get_filmDirector()
    {
        return $this->_filmDirector;
    }


    public function set_filmDirector($_filmDirector)
    {
        $this->_filmDirector = $_filmDirector;

        return $this;
    }



    public function get_filmGenre()
    {
        return $this->_filmGenre;
    }

  
    public function set_filmGenre($_filmGenre)
    {
        $this->_filmGenre = $_filmGenre;

        return $this;
    }

    public function get_synopsis()
    {
        return $this->_synopsis;
    }

    public function set_synopsis($_synopsis)
    {
        $this->_synopsis = $_synopsis;

        return $this;
    }


    public function get_casting()
    {
        return $this->_casting;
    }


    public function set_casting (Casting $_casting)
    {
        $this->_casting = $_casting;

        return $this;
    }
}


 