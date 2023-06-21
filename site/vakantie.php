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
<?php
require "database.php";
$sql = "SELECT * FROM vakantie";
$result = mysqli_query($conn, $sql);
$vakantie = mysqli_fetch_assoc($result);

if (mysqli_num_rows($result) > 0) {
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
    while ($row = mysqli_fetch_assoc($result)) {
        $omschrijving = $row['omschrijving'];
        $bestemming = $row['bestemming'];
        $start_datum = $row['start_datum'];
        $eind_datum = $row['eind_datum'];
        $soort = $row['soort'];
        $notitie = $row['notitie'];
        $toevoeg_datum = $row['toevoeg_datum'];

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