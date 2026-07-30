<?php

// import db
require_once __DIR__ . '/./data/db.php';

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