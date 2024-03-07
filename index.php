<?php
require_once __DIR__ . "/Model/Production.php";
require_once __DIR__ . "/Model/Genre.php";
require_once __DIR__ . "/Data/db.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP</title>

    <!-- LINK BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- LINK BOOTSTRAP SCRIPT -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"
        defer></script>
</head>

<body>

</body>

<table class="table">
    <thead>
        <th>Titolo</th>
        <th>Lingua</th>
        <th>Voto</th>
        <th>Genere</th>
        <th>Incassi</th>
        <th>Durata</th>
        <th>Stagioni</th>
    </thead>

    <tbody class="table-group-divider">

        <?php foreach ($productions as $production): ?>
            <tr>
                <td>
                    <?= $production->title ?>
                </td>
                <td>
                    <?= $production->language ?>
                </td>
                <td>
                    <?= $production->vote ?>
                </td>
                <td>
                    <ul>
                        <?php foreach ($production->genres as $genre): ?>
                            <li>
                                <h5>
                                    <?= $genre->name ?>
                                </h5>
                                <?= $genre->description ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </td>
                <?php if ($production instanceof Movie): ?>
                    <td>
                        <?= $production->revenue ?>
                    </td>
                    <td>
                        <?= $production->length ?>
                    </td>
                    <td>
                        -
                    </td>
                <?php elseif ($production instanceof Tv): ?>
                    <td>
                        -
                    </td>
                    <td>
                        -
                    </td>
                    <td>
                        <?= $production->seasons ?>
                    </td>
                <?php endif; ?>
            </tr>
        <?php endforeach; ?>


    </tbody>
</table>


</html>