<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inloggen</title>
</head>

<body>
    <?php include 'nav.php' ?>
    <main class="form-sign w-100 m-auto">
        <form method="post" action="verwerk-inloggen.php">
            <h1>inloggen</h1>

            <div class="container">

                <form action="verwerk-inloggen.php" method="post">
                    <ul>
                        <li>
                            <label for="txtemail">E-mail</label><br>
                            <input type="text" id="email" name="email" placeholder="email" autofocus>
                        </li>
                        <li>
                            <label for="txtTwachtwoord">wachtwoord</label><br>
                            <input type="password" id="wachtwoord" name="wachtwoord" placeholder="wachtwoord">
                        </li>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="remember-me"> Remember me
                            </label>
                        </div>
                        <button class="submit">verstuur</button>
                </form>

            </div>
        </form>
    </main>
    <?php include 'footer.php' ?>
</body>

</html>