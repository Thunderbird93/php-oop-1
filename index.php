<?php
class Movie{
    public $title;
    public $director;
    public $protagonist;
    public $genre;
    public $lenght;
    public $poster;
    public $language;

    function __construct($_title, $_director, $_protagonist, $_genre, $_lenght, $_poster, $_language)
    {
        $this->title = $_title;
        $this->director = $_director;
        $this->protagonist = $_protagonist;
        $this->genre = $_genre;
        $this->lenght = $_lenght;
        $this->poster = $_poster;
        $this->language = $_language;
    }
    public function printMovie($language)
    {
        if ($language == "eng"){
            $this->language ='Audio Originale: Inglese';
        } else if ($language == "ita") {
            $this->language ='Audio originale: Italiano';
        }
    }
}


$taxi = new Movie("Taxi Driver", "Martin Scorsese", "Robert De Niro", "Dramma", "114", "https://sothebys-md.brightspotcdn.com/12/c0/48045e944ad4885bd31da2a1ce96/taxi-driver.jpg", "eng");
$xmas = new Movie("Vacanze di natale '95", "Neri Parenti", "Christian De Sica", "Commedia", "95", "https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcQruU0hMGy1lLxFRloYYxMOkzKJx8qUhmZCfCI-aOMnT_I9uIvo", "ita");

$taxi ->printMovie('eng');
$xmas ->printMovie('ita');

var_dump($taxi);
var_dump($xmas);
