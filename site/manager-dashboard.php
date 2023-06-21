<?php
session_start();
// Ontvang het adminid na het inloggen
if ($_SESSION['isManager'] = true) {
    // Haal de gegevens van de admin op uit de database
    require "database.php";
    $sql = "SELECT * FROM Manager LEFT JOIN gebruiker ON manager.managerid = gebruiker.managerid";
    $result = mysqli_query($conn, $sql);
    $administrators = mysqli_fetch_all($result, MYSQLI_ASSOC);

    if (mysqli_num_rows($result) > 0) {
        // Admin-gegevens gevonden
        echo "<h1>Manager-Dashboard</h1>";
        echo "<table>";
        echo "<tr>";
        echo "<th>adminid</th>";
        echo "<th>in dienst</th>";
        echo "</tr>";
        foreach ($administrators as $administrator) {
        }
    }

// Sluit de database connectie
mysqli_close($conn);
}