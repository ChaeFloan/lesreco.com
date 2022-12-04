<?php
include '/xampp/htdocs/lesreco.com/base/connexionBDD.php';
include '/xampp/htdocs/lesreco.com/base/sessionStart.php';
$bdd = getConnexion();


// ICI ON RECUPERE LA LISTE DES FILMS POUR L'AFFICHER EN TEMPLATE
$requete = $bdd->query(
    "SELECT * FROM films"
);
$requete->execute();
$listeFilms = $requete->fetchAll();



// ICI ON RECUPERE LA LISTE DES USERS POUR L'AFFICHER EN TEMPLATE
$requete = $bdd->query(
    "SELECT * FROM users"
);
$requete->execute();
$listeUsers = $requete->fetchAll();




// print_r('$listeFilms[0][\'titre\'] : ' . $listeFilms[0]['titre']);
// echo "<br>";
// print_r('$listeFilms[1][\'titre\'] : ' . $listeFilms[1]['titre']);





$template = '/xampp/htdocs/lesreco.com/templates/index.phtml';
require '/xampp/htdocs/lesreco.com/templates/layout.phtml';
