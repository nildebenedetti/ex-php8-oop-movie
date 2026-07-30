<?php
// this trait can be attributed to movies, but also to other classes
// it is horizontal: we could possibly rent books, bikes, fiancèes...
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

?>