<?php
require "database.php";

$voornaam = $_POST["voornaam"];
$tussenvoegsel = $_POST["tussenvoegsel"];
$achternaam = $_POST["achternaam"];
$geslacht = $_POST["geslacht"];
$email = $_POST["email"];
$gebruikersnaam = $_POST["gebruikersnaam"];
$wachtwoord = $_POST["wachtwoord"];
$straat = $_POST["straat"];
$huisnummer = $_POST["huisnummer"];
$postcode = $_POST["postcode"];
$plaats = $_POST["plaats"];
$land = $_POST["land"];
$mobielnummer = $_POST["mobielnummer"];
$telefoonnummer = $_POST["telefoonnummer"];
$rol = $_POST["rol"];
$in_dienst = date("Y-m-d H:m:s");
$begin_datum = date("Y-m-d H:m:s");
$aantal_mensen = rand(1, 20);
$afdeling = $_POST["afdeling"];

$wachtwoord_hash = password_hash($wachtwoord, PASSWORD_DEFAULT);

if ($rol == "administrator") {
    $sql = "INSERT INTO administrator (in_dienst)
    VALUES('$in_dienst')";
    mysqli_query($conn, $sql);
    $id = mysqli_insert_id($conn);

    $sql = "INSERT INTO gebruiker (voornaam, tussenvoegsel, achternaam, geslacht, gebruikersnaam, email, wachtwoord, straat, huisnummer, postcode, plaats, land, telefoonnummer, mobielnummer, adminid) 

    VALUES('$voornaam','$tussenvoegsel','$achternaam','$geslacht','$gebruikersnaam','$email','$wachtwoord_hash','$straat','$huisnummer','$postcode','$plaats','$land','$telefoonnummer','$mobielnummer','$id')";
    mysqli_query($conn, $sql);
} elseif ($rol == "manager") {
    $sql = "INSERT INTO manager (afdeling, aantal_mensen)

    VALUES('$afdeling','$aantal_mensen')";
    mysqli_query($conn, $sql);
    $id = mysqli_insert_id($conn);
    $sql = "INSERT INTO gebruiker (voornaam, tussenvoegsel, achternaam, geslacht, gebruikersnaam, email,  wachtwoord, straat, huisnummer, postcode, plaats, land, telefoonnummer, mobielnummer, managerid) 

    VALUES('$voornaam','$tussenvoegsel','$achternaam','$geslacht','$gebruikersnaam','$email','$wachtwoord_hash','$straat','$huisnummer','$postcode','$plaats','$land','$telefoonnummer','$mobielnummer','$id')";

    mysqli_query($conn, $sql);
} elseif ($rol == "regular") {

    $sql = "INSERT INTO regular (begin_datum) 

   VALUES('$begin_datum')";
    mysqli_query($conn, $sql);
    $id = mysqli_insert_id($conn);

    $sql = "INSERT INTO gebruiker (voornaam, tussenvoegsel, achternaam, geslacht, gebruikersnaam, email,  wachtwoord, straat, huisnummer, postcode, plaats, land, telefoonnummer, mobielnummer, regularid) 

    VALUES('$voornaam','$tussenvoegsel','$achternaam','$geslacht','$gebruikersnaam''$email',,'$wachtwoord_hash','$straat','$huisnummer','$postcode','$plaats','$land','$telefoonnummer','$mobielnummer','$id')";
    mysqli_query($conn, $sql);
}

header("location: in.php");
exit;