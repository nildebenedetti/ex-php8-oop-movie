<?php
    // in case we are not using autoloader, 
    // it is correct to instate the require once
    // either here or in index.php (yet in case we choose 
    // index.php make sure to add it before any class import)
  // import rentable
    require_once __DIR__ . '/../Traits/Rentable.php';
    // import classes
    require_once __DIR__ . '/./Genre.php';
    // this is the main resource of the project!
    class Movie {
        // we attribute Rentable trait so it inherits variab;es and functions
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
            $this->genres = $_genres;
            
        }

        public function quickInfo() {
            return "\"{$this->title}\" by {$this->director} is a great movie of {$this->year}.";
        }

    }

?>