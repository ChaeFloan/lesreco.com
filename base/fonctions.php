<?php
// include '/xampp/htdocs/lesreco.com/base/connexionBDD.php';

function detailUser($pseudo)
{
    $bdd = getConnexion();

    $requete = $bdd->prepare(
        "SELECT id, prenom, nom, pseudo, email, password
        FROM users
        WHERE pseudo = ?"
    );
    $requete->execute(
        [$pseudo]
    );
    $user = $requete->fetch();
    return $user;
}
