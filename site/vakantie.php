<?php
require "database.php";
if (isset($_POST['zoekveld'])) {
    $zoekterm = $_POST['zoekveld'];

    $sql = "SELECT *
    FROM vakantie
    WHERE omschrijving LIKE '%$zoekterm%'
      OR bestemming LIKE '%$zoekterm%'
      OR start_datum LIKE '%$zoekterm%'
      OR eind_datum LIKE '%$zoekterm%'
      OR soort LIKE '%$zoekterm%'
      OR notitie LIKE '%$zoekterm%'
      OR toevoeg_datum LIKE '%$zoekterm%'";
    $result = mysqli_query($conn, $sql);

    $vakanties = mysqli_fetch_all($result, MYSQLI_ASSOC);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="vakantie.css">
    <title>Vakantie</title>
</head>

<body>
    <?php include "nav.php" ?>
    <div class="nav-searchbar">
        <form action="" method="post">
            <input type="text" name="zoekveld" id="zoekveld">
            <button type="submit"><i class="fa-solid fa-magnifying-glass"></i> Search</button>
        </form>
    </div>
    <?php
    if (isset($vakanties) && count($vakanties) > 0) {
        // Vakantiegegevens gevonden
        echo "<h1>Vakantiebestemmingen</h1>";
        echo "<table>";
        echo "<tr>";
        echo "<th>Omschrijving</th>";
        echo "<th>Bestemming</th>";
        echo "<th>Start Datum</th>";
        echo "<th>Eind Datum</th>";
        echo "<th>Soort</th>";
        echo "<th>Notitie</th>";
        echo "<th>Toevoeg Datum</th>";
        echo "</tr>";
        foreach ($vakanties as $vakantie) {
            $omschrijving = $vakantie['omschrijving'];
            $bestemming = $vakantie['bestemming'];
            $start_datum = $vakantie['start_datum'];
            $eind_datum = $vakantie['eind_datum'];
            $soort = $vakantie['soort'];
            $notitie = $vakantie['notitie'];
            $toevoeg_datum = $vakantie['toevoeg_datum'];

            // Toon de vakantiegegevens in de tabelrijen
            echo "<tr>";
            echo "<td>$omschrijving</td>";
            echo "<td>$bestemming</td>";
            echo "<td>$start_datum</td>";
            echo "<td>$eind_datum</td>";
            echo "<td>$soort</td>";
            echo "<td>$notitie</td>";
            echo "<td>$toevoeg_datum</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        // Geen resultaten gevonden
        echo "Geen vakanties gevonden.";
    }

    // Sluit de database connectie
    mysqli_close($conn);
    ?>
</body>

</html>
