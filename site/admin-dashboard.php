<?php
require 'database.php';
// Ontvang het adminid na het inloggen
$adminid = $_SESSION['adminid']; // Veronderstel dat adminid is opgeslagen in een sessie na het succesvol inloggen

// Haal de gegevens van de admin op uit de database
$sql = "SELECT * FROM aadministrator WHERE adminid = $adminid";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // Admingegevens gevonden
    $adminData = mysqli_fetch_assoc($result);

    // Adminid
    $adminid = $adminData['adminid'];
    // Andere admingegevens
    $in_dienst = $adminData['in_dienst'];

    // Toon de gegevens op het admin dashboard
    echo "<h1>Admin Dashboard</h1>";
    echo "<p>Admin ID: " . $adminid . "</p>";
    echo "<p>In dienst: " . $in_dienst . "</p>";
} else {
    // Admingegevens niet gevonden
    echo "Geen gegevens gevonden voor dit adminid.";
}

// Sluit de database connectie
mysqli_close($conn);
?>