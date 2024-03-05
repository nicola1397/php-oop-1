<?php

use function PHPSTORM_META\type;

require_once __DIR__ . "/../Model/Production.php";
require_once __DIR__ . "/../Model/Genre.php";
require_once __DIR__ . "/../Model/Tv.php";
require_once __DIR__ . "/../Model/Movies.php";

try {

    $gen1 = new Genre("Fantasy", "Cose che non esistono");
    $gen2 = new Genre("Avventura", "Si va in giro a fare cose");
    $gen3 = new Genre("Azione", "Ci si picchia forte");

    $movie1 = new Movie("Il signore degli anelli - la compagnia dell'anello", "Inglese", 9, [$gen1, $gen2, $gen3], "Tanti soldi", "Svariate ore");
    $movie2 = new Movie("Il signore degli anelli - le due torri", "Inglese", 9, [$gen1, $gen2, $gen3], "Tanti soldi", "Svariate ore");
    $movie3 = new Movie("Il signore degli anelli - il ritorno del re", "Inglese", 9, [$gen1, $gen2, $gen3], "Tanti soldi", "Svariate ore");
    $tv1 = new Tv("Gli anelli del potere", "Inglese", 9, [$gen1, $gen2, $gen3], 1);

    $productions = [
        $movie1,
        $movie2,
        $movie3,
        $tv1,
    ];

} catch (Exception $e) {
    $error = $e->getMessage();
    include "./error.php";
    exit();
}