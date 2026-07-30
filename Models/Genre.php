<?php
    // This class has relationshi M2M with Movies
    // many movies can havde many classes
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

?>