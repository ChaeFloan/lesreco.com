<?php
include '/xampp/htdocs/lesreco.com/base/connexionBDD.php';
include '/xampp/htdocs/lesreco.com/base/sessionStart.php';
$bdd = getConnexion();

if ($_SESSION['auth']) {

    echo 'PAGE MEMBRE, connexion réussie !';
} else {
    echo 'Erreur lors de la connexion';
}


// ICI ON RECUPERE LA LISTE DES FILMS DE L'UTILISATEUR POUR L'AFFICHER EN TEMPLATE
$requete = $bdd->prepare(
    "SELECT * FROM film
    INNER JOIN users
    WHERE pseudo = ?"
);
$requete->execute(
    [$_SESSION['auth']['pseudo']]
);
$listeFilmsUserAuth = $requete->fetchAll();




$template = '/xampp/htdocs/lesreco.com/templates/compteUser.phtml';
include '/xampp/htdocs/lesreco.com/templates/layout.phtml';
