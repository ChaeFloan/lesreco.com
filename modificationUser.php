<?php
include '/xampp/htdocs/lesreco.com/base/connexionBDD.php';
include '/xampp/htdocs/lesreco.com/base/sessionStart.php';
include '/xampp/htdocs/lesreco.com/base/fonctions.php';
$bdd = getConnexion();

// POUR AFFICHER LE MESSAGE D'ERREUR
$passwordExisting;


// MODIFICATION DU MOT DE PASSE
// Si les champs password et newPassword sont renseignés
if (!empty($_POST['password']) && !empty($_POST['newPassword'])) {
    // Si les champs sont identiques
    $passwordExisting = "Votre nouveau mot de passe est identique à votre mot de passe actuel.";
} else {
    $requete = $bdd->prepare(
        "UPDATE users 
            SET password = '" . $_POST["newPassword"] . "'
            WHERE id = ?"
    );
    $requete->execute(
        [$_SESSION['auth']['id']]
    );
};


// MODIFICATION DU PSEUDO
if (!empty($_POST["pseudo"]) || !empty($_POST["email"])) {
    $requete = $bdd->prepare(
        "UPDATE users 
        SET pseudo = '" . $_POST["pseudo"] . "', email = '" . $_POST["email"] . "'
        WHERE id = ?"
    );
    $requete->execute(
        [$_SESSION["auth"]["id"]]
    );





    // Est-ce que le paragraphe suivant est placé à la bonne place ?



    // Récupération des données user depuis SQL
    $user = detailUser($_POST['pseudo']);

    $_SESSION["auth"]["pseudo"] = $user["pseudo"];
    $_SESSION["auth"]["email"] = $user["email"];
    $_SESSION["auth"]["password"] = password_hash($user["password"], PASSWORD_BCRYPT);

    header('Location: compteUser.php');
    exit();
};





$template = '/xampp/htdocs/lesreco.com/templates/modificationUser.phtml';
require '/xampp/htdocs/lesreco.com/templates/layout.phtml';
