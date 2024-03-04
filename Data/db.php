<?php
require_once __DIR__ . "/../Model/Production.php";

$movie1 = new Production("Il signore degli anelli - la compagnia dell'anello", "Inglese", 9);
$movie2 = new Production("Il signore degli anelli - le due torri", "Inglese", 9);
$movie3 = new Production("Il signore degli anelli - il ritorno del re", "Inglese", 9);

$productions = [
    $movie1,
    $movie2,
    $movie3
];