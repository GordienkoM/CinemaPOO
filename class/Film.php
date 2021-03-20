<?php

class Film  {

    private $title;                // titre de film
    private $releaseDate;          // date de sortie de film en France 
    private $duration;             // durée de film  (en minutes)
    private $filmDirector;         // réalisateur de film

    public function __construct(string $title = "N/A", string  $releaseDate = "N/A", int $duration = 0, FilmDirector $filmDirector = NULL) {
        $this->title = $title;
        $this->releaseDate = new DateTime ($releaseDate);
        $this->duration = $duration;
        $this->filmDirector = $filmDirector;
    }


    public function getTitle()
    {
        return $this->title;
    }


    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

 
    public function getReleaseDate()
    {
        return $this->releaseDate->format("d-m-Y");
    }


    public function setReleaseDate($releaseDate)
    {
        $this->releaseDate = $releaseDate;

        return $this;
    }


    public function getDuration()
    {
        return $this->duration;
    }


    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }


    public function getFilmDirector()
    {
        return $this->filmDirector;
    }


    public function setFilmDirector($filmDirector)
    {
        $this->filmDirector = $filmDirector;

        return $this;
    }
}