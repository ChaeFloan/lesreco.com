<?php
include '/xampp/htdocs/lesreco.com/base/connexionBDD.php';
include '/xampp/htdocs/lesreco.com/base/sessionStart.php';
$bdd = getConnexion();


// ERREUR LORS DU SCRIPT CAR titre N'EST PAS RECONNU
$requete = $bdd->prepare(
    "DELETE FROM film
    WHERE film.titre = '" . $_POST["titre"] . "'"
);
$requete->execute();
$listeFilmsUserAuth = $requete->fetchAll();




$template = '/xampp/htdocs/lesreco.com/templates/compteUser.phtml';
include '/xampp/htdocs/lesreco.com/templates/layout.phtml';
