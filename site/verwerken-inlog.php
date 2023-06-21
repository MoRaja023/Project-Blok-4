<?php
require 'database.php';
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header($_SERVER["SERVER_PROTOCOL"] . " 405 Method Not Allowed", true, 405);
    exit;
}
$wachtwoord = $_POST["wachtwoord"];
$email = $_POST["email"];
$sql = "SELECT * FROM gebruiker WHERE email = '$email'";
$result = mysqli_query($conn, $sql);
$user = mysqli_fetch_assoc($result);

if (!is_array($user)) {
    header("location: inloggen.php");
    exit;
}
if (password_verify($wachtwoord, $user['password'])) {
    session_start();
    $_SESSION['isIngelogd'] = true;
    $_SESSION['email'] = $user['email'];
    $_SESSION['email'] = $user['email'];
    

    if (!is_null($user['adminid'])) {
        $_SESSION['isAdmin'] = true;
        header("location: admin-dashboard.php");
        exit;
    } elseif (!is_null($user['managerid'])) {

        header("location: manager-dashboard.php");

        $_SESSION['isManager'] = true;

        exit;
    } elseif (!is_null($user['regularid'])) {
        header("location: regular-dashboard.php");
        $_SESSION['isRegular'] = true;
        exit;
    }
}
header("location: inloggen.php");
exit;