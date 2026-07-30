<?php

// import rentable
require_once __DIR__ . '/../Traits/Rentable.php';
// import classes
require_once __DIR__ . '/../Models/Genre.php';
require_once __DIR__ . '/../Models/Movie.php';

// instantiate 2 genres
$sciFi = new Genre(1, 'Sci-Fi', '#00D2FF');
$horror = new Genre(2, 'Horror', '#8B0000');
$drama = new Genre(3, 'Dramatic', '#722F37');

// instantiate 2 movies

$hellraiser = new Movie(1, 'Hellraiser', 'Clive Barker', 'An unfaithful wife encounters the resurrected body of her dead lover. He is being hunted by the Cenobites, sadomasochistic beings from another dimension whom he summoned using a mysterious puzzle box.', 'Andrew Robinson, Clare Higgins, Ashley Laurence, Doug Bradley' ,  1987, [$horror]);
var_dump($hellraiser);

$matrix = new Movie(2, 'The Matrix', 'Lana & Lilly Wachowski','A computer hacker learns from mysterious rebels about the true nature of his reality...', 'Keanu Reeves, Laurence Fishburne, Carrie-Anne Moss', 1999, [$sciFi, $drama]);
var_dump($matrix);


?>