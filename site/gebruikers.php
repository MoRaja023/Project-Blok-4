<?php
include("database.php");

if (isset($_POST['zoekveld'])) {
    $zoekterm = $_POST['zoekveld'];


    $sql = "SELECT *
    FROM gebruiker
    LEFT JOIN administrator USING (adminid)
    LEFT JOIN manager USING (managerid)
    LEFT JOIN regular USING (regularid)
    WHERE voornaam LIKE '%$zoekterm%'
      OR gebruikerid LIKE '%$zoekterm%'
      OR gebruikersnaam LIKE '%$zoekterm%'
      OR email LIKE '%$zoekterm%'
      OR geslacht LIKE '%$zoekterm%'
      OR straat LIKE '%$zoekterm%'
      OR huisnummer LIKE '%$zoekterm%'
      OR postcode LIKE '%$zoekterm%'
      OR plaats LIKE '%$zoekterm%'
      OR telefoonnummer LIKE '%$zoekterm%'
      OR mobielnummer LIKE '%$zoekterm%'
      OR regularid LIKE '%$zoekterm%'
      OR managerid LIKE '%$zoekterm%'
      OR adminid        LIKE '%$zoekterm%'
      OR in_dienst       LIKE '%$zoekterm%'
      OR afdeling       LIKE '%$zoekterm%'
      OR aantal_mensen   LIKE '%$zoekterm%'
      OR begin_datum     LIKE '%$zoekterm%'";

    $result = mysqli_query($conn, $sql);


    if (!$result) {
        die("Query failed: " . mysqli_error($conn));
    }


    $infogebruikers = mysqli_fetch_all($result, MYSQLI_ASSOC);
} else {

    $sql = "SELECT *
            FROM gebruiker
            LEFT JOIN administrator USING (adminid)
            LEFT JOIN manager USING (managerid)
            LEFT JOIN regular USING (regularid)";

    $result = mysqli_query($conn, $sql);


    if (!$result) {
        die("Query failed: " . mysqli_error($conn));
    }


    $infogebruikers = mysqli_fetch_all($result, MYSQLI_ASSOC);
}

if (isset($_POST['dropdown'])) {


    $sql = "SELECT *
    FROM users
    LEFT JOIN administrator USING (adminid)
    LEFT JOIN manager USING (managerid)
    LEFT JOIN regular USING (regularid)
    ORDER BY gebruikerid desc";

    $result = mysqli_query($conn, $sql);

    $infogebruikers = mysqli_fetch_all($result, MYSQLI_ASSOC);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Overzicht gebruikers</title>
    <link rel="stylesheet" href="gebruikers.css">
</head>

<body>

    <?php include("nav.php") ?>

    <div class="nav-searchbar">
        <form action="" method="post">
            <input type="text" name="zoekveld" id="zoekveld">
            <button type="submit"><i class="fa-solid fa-magnifying-glass"></i> Search</button>
        </form>
    </div>

    <form action="" method="post">
        <select name="dropdown" id="dropdown">
            <option value="gebruikerid">Sorteer op gebruikerid</option>
        </select>
        <button type="submit">Sort</button>
    </form>
    <table>
        <tr>
            <th>gebruikerid</th>
            <th>voornaam</th>
            <th>tussenvoegsels</th>
            <th>achternaam</th>
            <th>gebruikersnaam</th>
            <th>email</th>
            <th>geslacht</th>
            <th>straat</th>
            <th>huisnummer</th>
            <th>postcode</th>
            <th>plaats</th>
            <th>telefoonnummer</th>
            <th>mobielnummer</th>
            <th>regularid</th>
            <th>managerid</th>
            <th>adminid</th>
            <th>indienst</th>
            <th>afdeling</th>
            <th>aantalmensen</th>
            <th>perwaneer</th>
        </tr>
        <?php foreach ($infogebruikers as $infogebruiker) : ?>
            <tr>
                <td><?php echo $infogebruiker["gebruikerid"] ?></td>
                <td><?php echo $infogebruiker["voornaam"] ?></td>
                <td><?php echo $infogebruiker["tussenvoegsel"] ?></td>
                <td><?php echo $infogebruiker["achternaam"] ?></td>
                <td><?php echo $infogebruiker["gebruikersnaam"] ?></td>
                <td><?php echo $infogebruiker["email"] ?></td>
                <td><?php echo $infogebruiker["geslacht"] ?></td>
                <td><?php echo $infogebruiker["straat"] ?></td>
                <td><?php echo $infogebruiker["huisnummer"] ?></td>
                <td><?php echo $infogebruiker["postcode"] ?></td>
                <td><?php echo $infogebruiker["plaats"] ?></td>
                <td><?php echo $infogebruiker["telefoonnummer"] ?></td>
                <td><?php echo $infogebruiker["mobielnummer"] ?></td>
                <td><?php echo $infogebruiker["regularid"] ?></td>
                <td><?php echo $infogebruiker["managerid"] ?></td>
                <td><?php echo $infogebruiker["adminid"] ?></td>
                <td><?php echo $infogebruiker["in_dienst"] ?></td>
                <td><?php echo $infogebruiker["afdeling"] ?></td>
                <td><?php echo $infogebruiker["aantal_mensen"] ?></td>
                <td><?php echo $infogebruiker["begin_datum"] ?></td>
            </tr>
        <?php endforeach ?>
    </table>
</body>

</html>