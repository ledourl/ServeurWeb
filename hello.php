<?php

class Movie 
{
    private $movieName;
    private $movieDescription;
    private $movieDuration;
    private $releaseDate;
    
    function setMovieName($name)
    {
        
           $this->movieName = $name;
    }

    function setMovieDescription($desc)
    {
        
           $this->movieDescription = $desc;
    }

    function setMovieDuration($duration)
    {
        
           $this->movieDuration = $duration;
    }
    
    function setReleaseDate($relDate)
    {
        
           $this->releaseDate = $relDate;
    }
    
    function getMovieName()
    {
        echo $this->movieName;
    }
    
    function getMovieDescription()
    {
        echo $this->movieDescription;
    }

    function getMovieDuration()
    {
        echo $this->movieDuration;
    }
    
    function getReleaseDate()
    {
        echo $this->releaseDate;
    }
    
    function __construct($name, $desc, $duration, $relDate)
    {
           $this->movieName = $name;
           $this->movieDescription = $desc;
           $this->movieDuration = $duration;
           $this->releaseDate = $relDate;
    }
    
    function show()
    {
        echo 'Nom du film : '.$this->movieName."\n".'Description : '.$this->movieDescription."\n".'Durée du film : '.$this->movieDuration."\n".'Date de sortie : '.$this->releaseDate."\n"; 
    }
}


$mov = new Movie('Sharknado 123','film nul','2000000000000','64656');
$mov->show();
