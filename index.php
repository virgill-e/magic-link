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
        <h2>Login</h2>
        <form action="">
            <div class="box-input">
                <label for="email-input">Email <img class="icon" src="img/mail-outline.svg" alt="email icons"> </label>
                <input id="email-input" name="email-input" type="email" placeholder="yourEmail@email.be" required>
            </div>

            <input class="submit-button" type="submit" value="Login">
        </form>
        <div class="not-a-member">
            <span>not a member ?</span>
            <a href="signup.php">sign up</a>
        </div>
    </div>
</body>
</html>
