<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="vakantie.css">
    <title>Admin-Dashboard</title>
</head>

<body>
    <?php
    // Ontvang het adminid na het inloggen
    if ($_SESSION['isAdmin'] = true) {
        // Haal de gegevens van de admin op uit de database
        require "database.php";
        $sql = "SELECT * FROM administrator LEFT JOIN gebruiker ON administrator.adminid = gebruiker.adminid";
        $result = mysqli_query($conn, $sql);
        $administrators = mysqli_fetch_all($result, MYSQLI_ASSOC);

        if (mysqli_num_rows($result) > 0) {
            // Admin-gegevens gevonden
            echo "<h1>Admin-Dashboard</h1>";
            echo "<table>";
            echo "<tr>";
            echo "<th>adminid</th>";
            echo "<th>in dienst</th>";
            echo "</tr>";
            foreach ($administrators as $administrator) {
                $adminid = $administrator['admin id'];
                $in_dienst = $administrator['in dienst'];

                // Toon de vakantiegegevens in de tabelrijen
                echo "<tr>";
                echo "<td>$adminid</td>";
                echo "<td>$in_dienst</td>";
                echo "</tr>";
            }
        }

        // Sluit de database connectie
        mysqli_close($conn);
    }

    // html DOM: Document Object Model
    ?>
</body>

</html>