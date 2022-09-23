<?php

class Movie{
    public $title;
    public $director;
    public $plot;
    protected $year;
    protected $language;

    public function __construct($title, $director, $year = null, $language = null, $plot = null)
    {
        $this->title = $title;
        $this->director = $director;
        $this->plot = $plot;
        $this->year = $year;
        $this->language = $language;
    }
    public function setYear($year){
        if(is_int($year) && $year >= 1895 && $year < 2025){
            $this->year = $year;
        } else{
            die('Year not correct');
        }
    }

    public function getYear(){
        return $this->year;
    }
    public function setLanguage($language){
        if(is_string($language) && strlen($language) == 2){
            $this->language = $language;
        } else{
            die('Language not correct')
        }
    }
    public function getLanguage(){
        return $this->language;
    }
    public function getMovieInfo(){
        return $this->title . '-' . $this->director;
    }
}   

?>