<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="registreren.css">
    <title>Registreren</title>
</head>

<body>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registreren</title>
        <link rel="stylesheet" href="regrestratie.css">
    </head>

    <body>
        <main>

            <div class="container">
                <form action="verwerk-inlog.php" method="post">
                    <ul>
                        <li>
                            <label for="voornaam">Voornaam</label><br>
                            <input type="text" id="voornaam" name="voornaam" placeholder="voornaam" autofocus>
                        </li>
                        <li>
                            <label for="tussenvoegsel">Tussenvoegsel</label><br>
                            <input type="text" id="achternaam" name="achternaam" placeholder="achternaam">
                        </li>
                        <li>
                            <label for="achternaam">Achternaam</label><br>
                            <input type="text" id="achternaam" name="achternaam" placeholder="achternaam">
                        </li>
                        <li>
                            <label for="email">Email</label><br>
                            <input type="text" id="email" name="email" placeholder="email">
                        </li>
                        <li>
                            <label for="mobielnummer">Mobielnummer</label><br>
                            <input type="text" id="mobielnummer" name="mobielnummer" placeholder="mobielnummer">
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <label for="straat">Straat</label><br>
                            <input type="text" id="straat" name="straat" placeholder="straat">
                        </li>
                        <li>
                            <label for="huisnummer">Huisnummer</label><br>
                            <input type="text" id="huisnummer" name="huisnummer" placeholder="huisnummer">
                        </li>
                        <li>
                            <label for="postcode">Postcode</label><br>
                            <input type="text" id="postcode" name="postcode" placeholder="postcode">
                        </li>
                        <li>
                            <label for="plaats">Plaats</label><br>
                            <input type="text" id="plaats" name="plaats" placeholder="plaats">
                        </li>
                        <li>
                            <label for="land">Land</label><br>
                            <input type="text" id="land" name="land" placeholder="land">
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <label for="password">Password</label><br>
                            <input type="text" id="password " name="password" placeholder="password">
                        </li>
                        <li>
                            <label for="gebruikersnaam">Gebruikersnaam</label><br>
                            <input type="text" id="gebruikersnaam" name="gebruikersnaam" placeholder="gebruikersnaam">
                        </li>
                        <li>
                            <label for="rol">choose a role</label>
                            <select id="rol" name="rol">
                                <option value="administrator">administrator</option>
                                <option value="manager">manager</option>
                                <option value="regular">regular</option>
                            </select>
                        </li>
                        <li>
                            <label for="geslacht">geslacht</label>
                            <select id="geslacht" name="geslacht">
                                <option value="man">man</option>
                                <option value="vrouw">vrouw</option>

                            </select>
                        </li>
                        <li>
                            <button type="submit">Verstuur</button>
                        </li>
                    </ul>
                </form>
            </div>
        </main>

    </body>

    </html>

</body>

</html>