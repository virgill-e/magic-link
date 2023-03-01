<?php

namespace models;
require_once "php/inc/db_link.inc.php";

use dbLink\dbLink;



class User
{
    private $firstName;
    private $surName;
    private $email;

    public function __construct($firstName, $surName, $email)
    {
        $this->firstName = $firstName;
        $this->surName = $surName;
        $this->email = $email;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function getSurName()
    {
        return $this->surName;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function registerUser()
    {
        try {
            $link = dbLink::getConnection();
            $sql = "INSERT INTO user (firstName, surName, email) VALUES (:firstName, :surName, :email)";
            $stmt = $link->prepare($sql);
            $stmt->bindParam(':firstName', $this->firstName);
            $stmt->bindParam(':surName', $this->surName);
            $stmt->bindParam(':email', $this->email);
            $stmt->execute();
            dbLink::disconnect($link);
        } catch (\PDOException $e) {
            throw new \Exception('Failed to register user: ' . $e->getMessage());
        }
    }

    /**
     * check if email user exist in database
     * @return boolean
     */
    public function checkIfUserExist(){
        try {
            $link = dbLink::getConnection();
            $sql = "SELECT * FROM user WHERE email=:email";
            $stmt = $link->prepare($sql);
            $stmt->bindParam(':email', $this->email);
            $stmt->execute();
            $result = $stmt->fetch();
            dbLink::disconnect($link);
            if($result){
                return true;
            }else{
                return false;
            }
        } catch (\PDOException $e) {
            throw new \Exception('Failed to check if user exist: ' . $e->getMessage());
        }
    }

}