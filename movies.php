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
        try {
            if (is_string($this->name)) {
                if ($this->year != null) {
                    echo 'Il film selezionato è' . ' ' . '<b>' . $this->name . '</b>' . ',' . ' ' . 'regia di' . ' ' . $this->director . ' ' . 'del' . ' ' . $this->year;
                } else {
                    echo 'Il film selezionato è' . ' ' . '<b>' . $this->name . '</b>' . ',' . ' ' . 'regia di' . ' ' . $this->director;
                }
            } else {
                throw new Exception('Il valore inserito nonè una stringa');
            }
        } catch (Exception $z) {
            echo 'Errore!' . ' ' . $z->getMessage();
        }
    }
}