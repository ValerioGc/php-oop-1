<?php

include_once __DIR__ . "/movies.php";

$movie1 = new Movie("Avatar", "", "J.Cameron");
$movie2 = new Movie("The Hatefull Height", "2016", "Q.Tarantino");
$movie3 = new Movie("Il signore degli anelli", "2001", "P.Jackson");


echo "<pre>" . $movie1-> getname() . "</pre>";
echo "<pre>" . $movie2-> getname() . "</pre>";
echo "<pre>" . $movie3-> getname() . "</pre>";



