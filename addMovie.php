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
        "INSERT INTO film (titre, genre, etiquettes)
    VALUES (:titre,:genre,:etiquettes)"
    );
    $requete->execute(array(
        ":titre" => $titre,
        ":genre" => $genre,
        ":etiquettes" => $etiquettes
    ));
    // ce qui vient ensuite a été ajouté et non testé !!! - note du vendredi 07/10/2022
    // ************************************************************************************
    // ATTENTION il faudra retoucher au code de la page d'accueil car il faudra afficher chaque liste indépendament de chaque utilisateur

    // On récupère les informations du film afin de passer à l'étape suivante
    // REQUETE INCOMPLETE -----
    // $requete = $bdd->prepare(
    //     "SELECT id, titre
    //     FROM film
    //     WHERE titre = ?"
    // );
    // $requete->execute(
    //     [$_POST['titre']]
    // );
    // $nouveauFilmAjoute = $requete->fetch();



    // REQUETE KO - voir comment faire pour associer un film à plusieurs utilisateurs
    // AJOUTER L'ID DU FILM DANS L'ID_FILM DE L'UTILISATEUR
    // $requete = $bdd->prepare(
    //     "INSERT INTO users (id_film) 
    //     SELECT film.id
    //     FROM film
    //     INNER JOIN users ON users.id_film = film.id"
    // );
    // $requete->execute();

    // INSERT INTO orders ( userid, timestamp) 
    // SELECT o.userid , o.timestamp 
    // FROM users u 
    // INNER JOIN orders o ON  o.userid = u.id






    header("Location: index.php");
    exit();
}


$template = '/xampp/htdocs/lesreco.com/templates/addMovie.phtml';
require '/xampp/htdocs/lesreco.com/templates/layout.phtml';
