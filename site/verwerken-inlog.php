<?php 

if ($_SERVER['REQUEST_METHOD'] !== 'POST'){
header($_SERVER["SERVER_PROTOCOL"]. "405 Method Not Allowed", true, 405);
include '405.php';
exit;
}

// We controleren of de key email in de POST-array bestaat
if (!isset($_POST['email'])){
    header("location: inloggen.php");
    exit;
}

//daarna controloren we of het emailadres is ingevuld (dus niet leeg)
if (empty($_POST['email'])){
    header("locatuin: inloggen.php");
    exit;
}

// dan komt hier de rest van de code....

// het eerste input field met een name attribuur 'email'

//We hebben een database connectie nodig
require 'datebas.php';
//We gaan nu het emailadres dat is ingevuld vergelijken met de waardes in de database.

$sql = "SELECT * FROM gebruiker WHERE email = '$email'"; // check de insle-quotes naast email

// dan voeren we de querry uit;
$result = mysqli_query($conn, $sql);

$gebruiker = mysqli_fetch_assoc($result);

// Hier moet ook een check opgedaan worden van de gebruiker:
if (is_bool($gebruiker)) {
    header("location: inloggen.php");
}

?>