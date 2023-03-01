<?php
namespace magicLink;

class MagicLink
{

    private static $linkDuration = 15*60; //15min
    private static $tokenSize = 32;

    public static function generateLink()
    {
        //generation de token
        $token = bin2hex(random_bytes(self::$tokenSize));
        //generation de lien magique
        $link = "http://localhost/magicLinkConnection.php?token=$token";
        //envoi de lien magique par email
            // self::sendEmail($email, $link);
        //enregistrement de lien magique dans la base de donnees
            //self::saveLink($email, $token);
        return $link;
    }

    public static function sendEmail($email, $link)
    {

    }

    public static function saveLink($email, $token)
    {
        //TODO:
    }

    /**
     * Verifie si le token fournit est valide pour le user et que la date n'est pas expirée
     * @param $token
     * @return bool
     */
    public static function checkLink($token)
    {

    }
}

?>