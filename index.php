<?php
class Movie{
    public $title;
    public $director;
    public $protagonist;
    public $genre;
    public $lenght;
    public $poster;

    function __construct($_title, $_director)
    {
        $this->title = $_title;
        $this->director = $_director;
        $this->protagonist = $_protagonist;
        $this->genre = $_genre;
        $this->lenght = $_lenght;
        $this->poster = $_poster;
    }
}


