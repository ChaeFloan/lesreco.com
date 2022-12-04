<?php
include '/xampp/htdocs/lesreco.com/base/connexionBDD.php';
include '/xampp/htdocs/lesreco.com/base/sessionStart.php';
$bdd = getConnexion();


if (!empty($_POST)) {

    $titre = htmlspecialchars($_POST['titre']);
    $genre = htmlspecialchars($_POST['genre']);
    $etiquettes = htmlspecialchars($_POST['etiquettes']);


    // AJOUTER LE FILM DANS LA BDD (il s'agira d'une BDD globale à tous les utilisateurs)
    $requete = $bdd->prepare(
        "INSERT INTO films (titre, genre, etiquettes)
    VALUES (:titre,:genre,:etiquettes)"
    );
    $requete->execute(array(
        ":titre" => $titre,
        ":genre" => $genre,
        ":etiquettes" => $etiquettes
    ));






    header("Location: index.php");
    exit();
}


$template = '/xampp/htdocs/lesreco.com/templates/addMovie.phtml';
require '/xampp/htdocs/lesreco.com/templates/layout.phtml';
