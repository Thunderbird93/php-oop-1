<?php
class Movie{
    public $title;
    public $director;
    public $protagonist;
    public $genre;
    public $lenght;
    public $poster;

    function __construct($_title, $_director, $_protagonist, $_genre, $_lenght, $_poster)
    {
        $this->title = $_title;
        $this->director = $_director;
        $this->protagonist = $_protagonist;
        $this->genre = $_genre;
        $this->lenght = $_lenght;
        $this->poster = $_poster;
    }
}


$taxi = new Movie("Taxi Driver", "Martin Scorsese", "Robert De Niro", "Dramma", "114 minuti", "https://sothebys-md.brightspotcdn.com/12/c0/48045e944ad4885bd31da2a1ce96/taxi-driver.jpg");
var_dump($taxi);
