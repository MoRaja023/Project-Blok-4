<?php
if (mysqli_num_rows($result) > 0) {
    // Vakantiegegevens gevonden
    echo "<h1>Vakantiebestemmingen</h1>";
    echo "<ul>";
    while ($row = mysqli_fetch_assoc($result)) {
        $omschrijving = $row['omschrijving'];
        $bestemming = $row['bestemming'];
        $start_datum = $row['start_datum'];
        $eind_datum = $row['eind_datum'];
        $soort = $row['soort'];
        $notitie = $row['notitie'];

        // Toon de vakantiegegevens
        echo "<li>";
        echo "<h3>$omschrijving</h3>";
        echo "<p>Bestemming: $bestemming</p>";
        echo "<p>Periode: $start_datum - $eind_datum</p>";
        echo "<p>Soort: $soort</p>";
        echo "<p>Notitie: $notitie</p>";
        echo "</li>";
    }
    echo "</ul>";
} else {
    // Geen vakantiegegevens gevonden
    echo "Geen vakantiebestemmingen gevonden.";
}

// Sluit de database connectie
mysqli_close($conn);
?>