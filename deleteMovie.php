<?php
include '/xampp/htdocs/lesreco.com/base/connexionBDD.php';
include '/xampp/htdocs/lesreco.com/base/sessionStart.php';
$bdd = getConnexion();


// Mettre en place une sécurité pour que le DELETE ne puisse être fait que si le user est connecté


// ERREUR LORS DU SCRIPT CAR titre N'EST PAS RECONNU
$requete = $bdd->prepare(
    "DELETE FROM films
    WHERE films.titre = '" . $_POST["titre"] . "'"
);
$requete->execute();
$listeFilmsUserAuth = $requete->fetchAll();



echo '$listeFilmsUserAuth[0] -> ' . $listeFilmsUserAuth[0];
echo 'titre $_POST["titre"] : ' . $_POST["titre"];
echo 'titre $titre : ' . $titre;
echo 'titre $filmUserAuth[\'titre\'] : ' . $filmUserAuth['titre'];




$template = '/xampp/htdocs/lesreco.com/templates/compteUser.phtml';
include '/xampp/htdocs/lesreco.com/templates/layout.phtml';
