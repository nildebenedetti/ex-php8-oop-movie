<?php

class Genre {
    public $id;
    public $name;
    public $colorCode;

    public function __construct($_id, $_name, $_colorCode) {
        $this->name = $_name;
        $this->id = $_id;
        $this->colorCode = $_colorCode;
    }
}

class Movie {
    public $id;
    public $title;
    public $director;
    public $synopsis;
    public $cast;
    public $year;
    public Genre $genre;

    public function __construct($_id, $_title, $_director, $_synopsis, $_cast, $_year, Genre $_genre) {
        $this->id = $_id;
        $this->title = $_title;
        $this->director = $_director;
        $this->synopsis = $_synopsis;
        $this->cast = $_cast;
        $this->year = $_year;
        $this->genre = $_genre;
        
    }

    public function quickInfo() {
        return "\"{$this->title}\" by {$this->director} is a great {$this->genre->name} movie of {$this->year}.";
    }

}

// instantiate 2 genres
$sciFi = new Genre(1, 'Sci-Fi', '#00D2FF');
$horror = new Genre(2, 'Horror', '#8B0000');

// instantiate 2 movies

$hellraiser = new Movie(1, 'Hellraiser', 'Clive Barker', 'An unfaithful wife encounters the resurrected body of her dead lover. He is being hunted by the Cenobites, sadomasochistic beings from another dimension whom he summoned using a mysterious puzzle box.', 'Andrew Robinson, Clare Higgins, Ashley Laurence, Doug Bradley' ,  1987, $horror);

$matrix = new Movie(2, 'The Matrix', 'Lana & Lilly Wachowski','A computer hacker learns from mysterious rebels about the true nature of his reality...', 'Keanu Reeves, Laurence Fishburne, Carrie-Anne Moss', 1999, $sciFi);

// print quick info with public function 

echo $hellraiser->quickInfo();

echo "------------------------><br>";

echo $matrix->quickInfo();

?>