<?php
namespace dbLink;
require 'config.inc.php';

use PDO;
use PDOException;

const DBNAME = "magiclink";


class dbLink {
    /**
    * Se connecte à la base de données
    * @var string $base Nom de la base de données
    * @var string $message ensemble des messages à retourner à l'utilisateur, séparés par un saut de ligne
    * @return PDO|false Objet de liaison à la base de données ou false si erreur
    */
    public static function getConnection(){
        try {
            $link = new PDO('mysql:host=' . MYHOST . ';dbname=' . DBNAME . ';charset=UTF8', MYUSER, MYPASS);
            $link->setAttribute(PDO::ATTR_CASE, PDO::CASE_LOWER);
            $link->exec("set names utf8");
            $link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            throw new \Exception('Failed to connect to DB: ' . $e->getMessage());
            $link = false;
        }
        return $link;
    }

    /**
    * Déconnexion de la base de données
    * @var PDO $link Objet de liaison à la base de données
    */
    public static function disconnect(&$link){
        $link = null;
    }
}
?>
