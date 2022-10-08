<?php
include '/xampp/htdocs/lesreco.com/base/connexionBDD.php';
include '/xampp/htdocs/lesreco.com/base/fonctions.php';
include '/xampp/htdocs/lesreco.com/base/sessionStart.php';
$bdd = getConnexion();


if (!empty($_POST)) {
    // On récupère les données de l'utilisateur qui se connecte
    $user = detailUser($_POST["pseudo"]);
    // echo '<pre>';
    // var_dump($user);
    // echo '</pre>';

    // Si : username inconnu
    // if($_POST["username"] != $user)

    // Si : password erroné


    // Sinon
    // On ouvre sa session utilisateur
    $_SESSION["auth"] = [
        "id" => $user["id"],
        "pseudo" => $user["pseudo"],
        "password" => $user["password"],
        "email" => $user["email"],
    ];

    header("Location: compteUser.php");
    exit();
}




$template = '/xampp/htdocs/lesreco.com/templates/formConnexionUser.phtml';
require '/xampp/htdocs/lesreco.com/templates/layout.phtml';
