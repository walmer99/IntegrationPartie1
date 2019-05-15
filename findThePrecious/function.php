<?php

/**
 * @return PDO
 */
function baseConnect()
{

    $user = "root";
    $password = "Aphroditesçç";
    $dbname = 'mysql:host=localhost;dbname=findThePrecious';
    try {
        $connexion = new PDO($dbname, $user, $password);
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $connexion->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        return $connexion;
    } catch (PDOException $e) {
        die('Echec: ' . $e->getMessage());
    }
}



