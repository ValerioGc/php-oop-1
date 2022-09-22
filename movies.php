<?php

class Movie {
    protected $name;
    public $year;
    public $director;


    public function __construct($movieName, $movieYear, $movieDirector  = null){
        $this->name = $movieName;
        $this->year = $movieYear;
        $this->director = $movieDirector;
    }

    public function getname(){
        if ($this->year != null) {
            echo 'Il film selezionato è' . ' ' . $this->name . ',' . ' ' . 'regia di' . ' ' . $this->director . ' ' . 'del' . ' ' . $this->year;
        } else {
            echo 'Il film selezionato è' . ' ' . $this->name . ',' . ' ' . 'regia di' . ' ' . $this->director;
        }
    }
}