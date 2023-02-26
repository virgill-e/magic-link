<?php
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/styleSheet.css">
    <title>Magic link</title>
</head>
<body>
<h1>Magic link</h1>
<div class="box-form">
    <h2>Sign up</h2>
    <form action="">
        <div class="box-input">
            <label for="firstName-input">First name</label>
            <input id="firstName-input" name="firstName-input" type="text" placeholder="Virgile" required>
        </div>
        <div class="box-input">
            <label for="surName-input">Surname</label>
            <input id="surName-input" name="surName-input" type="text" placeholder="Bigaré" required>
        </div>
        <div class="box-input">
            <label for="email-input">Email <img class="icon" src="img/mail-outline.svg" alt="email icons"></label>
            <input id="email-input" name="email-input" type="email" placeholder="yourEmail@email.be" required>
        </div>
        <input class="submit-button" type="submit" value="Sign up">
        <div class="already-have-account">
            <span>already have an account ?</span>
            <a href="index.php">login</a>
        </div>
    </form>
</div>
</body>
</html>