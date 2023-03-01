<?php

require_once("php/class/MagicLink.php");
require_once("php/class/Grammar.php");
require_once ("php/models/User.php");

use magicLink\MagicLink;
use grammar\Grammar;
use models\User;


$formComplted=false;


if(isset($_POST["signup"])){
    $firstName = strip_tags($_POST["firstName-input"]);
    $surName = strip_tags($_POST["surName-input"]);
    $email = strip_tags($_POST["email-input"]);
    if(Grammar::isName($firstName)&&Grammar::isName($surName)&&Grammar::isEmail($email)){
        $user= new User($firstName,$surName,$email);
        $formComplted=true;
        //TODO: verifier si pas deja en bd si oui enregistré juste le token + date et envoyer un mail
        if(!$user->checkIfUserExist()){
            $user->registerUser();
        }
    }
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/styleSheet.css">
    <script src="js/setDisplay.js"></script>
    <title>Magic link</title>

</head>
<body>
<h1>Magic link</h1>
<div class="box-form">
    <h2>Sign up</h2>
    <form action="" method="post" >
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
        <input class="submit-button" type="submit" value="Sign up" name="signup">
        <div class="already-have-account">
            <span>already have an account ?</span>
            <a href="index.php">login</a>
        </div>
    </form>
</div>

<div class="pop-up">
    <span>
        A confirmation link has been emailed at test@gmail.com,
        please click on it to confirm your email address,
        the link will expire in 15 minutes.
        <?php
        if($formComplted) echo MagicLink::generateLink();
        ?>
        (problème affichage normal à cause du lien)
    </span>
    <button onclick=setDisplay("pop-up","none") class="submit-button">Close</button>
    <?php
    if($formComplted) echo "<script>setDisplay('pop-up','flex')</script>";
    ?>

</div>

</body>
</html>