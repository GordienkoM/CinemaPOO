<?php

class FilmGenre {
    protected $genreName;            
    
    public function __construct(string $genreName = "N/A") {
        $this->genreName = $genreName;    // nom de genre
        $this->filmList = [];           // liste des films
        
    }
} 