<?php

trait Rentable {
    // un bool per dire se è rented oppure no
    public bool $isRent = false;

    // un metodo per verificare disponilbilità
    public function checkAvailability() :string {
        return $this->isRent ? "Currently not available" : "Available for rent";
    }
    // un metodo per noleggiare
    public function borrow() :string {
        $this->isRent = true;
    return "Yay! You just booked the movie for rental enjoy your watch party and do not forget to hand it back.";
    }

    // e uno per restituire
    public function return() :string {
        $this->isRent = false;
        return "Thanks for handing back the movie! Hope you enjoyed your watch party!";

    }

}

class Genre {
    public int $id;
    public string $name;
    public string $colorCode;

    public function __construct($_id, $_name, $_colorCode) {
        $this->name = $_name;
        $this->id = $_id;
        $this->colorCode = $_colorCode;
    }
}

class Movie {

    use Rentable;

    public int $id;
    public string $title;
    public string $director;
    public string $synopsis;
    public string $cast;
    public string $year;
    public array $genres = [];

    public function __construct($_id, $_title, $_director, $_synopsis, $_cast, $_year, $_genres) {
        $this->id = $_id;
        $this->title = $_title;
        $this->director = $_director;
        $this->synopsis = $_synopsis;
        $this->cast = $_cast;
        $this->year = $_year;
        $this->genre = $_genres;
        
    }

    public function quickInfo() {
        return "\"{$this->title}\" by {$this->director} is a great movie of {$this->year}.";
    }

}

// instantiate 2 genres
$sciFi = new Genre(1, 'Sci-Fi', '#00D2FF');
$horror = new Genre(2, 'Horror', '#8B0000');
$drama = new Genre(3, 'Dramatic', '#722F37');

// instantiate 2 movies

$hellraiser = new Movie(1, 'Hellraiser', 'Clive Barker', 'An unfaithful wife encounters the resurrected body of her dead lover. He is being hunted by the Cenobites, sadomasochistic beings from another dimension whom he summoned using a mysterious puzzle box.', 'Andrew Robinson, Clare Higgins, Ashley Laurence, Doug Bradley' ,  1987, [$horror]);
var_dump($hellraiser);

$matrix = new Movie(2, 'The Matrix', 'Lana & Lilly Wachowski','A computer hacker learns from mysterious rebels about the true nature of his reality...', 'Keanu Reeves, Laurence Fishburne, Carrie-Anne Moss', 1999, [$sciFi, $drama]);
var_dump($matrix);

// print quick info with public function 

echo $hellraiser->quickInfo();

echo "------------------------><br>";

echo $matrix->quickInfo();
echo "<br>";
// controlliamo se rentable
echo $matrix->checkAvailability();
echo "<br>";
//prendiamo in prestito
echo "Prendo in prestito: <br>";
echo $matrix->borrow();
echo "controllo dispo:<br>";
echo $matrix->checkAvailability();
echo "<br>";
echo "------------------------><br>";
// restituitamo
echo "Prendo in prestito: <br>";
echo $matrix->return();
echo "controllo dispo:<br>";
echo $matrix->checkAvailability();
echo "<br>";
echo "------------------s------><br>";
//controlliamo se rentable
echo "<br>";
?>