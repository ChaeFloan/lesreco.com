<?php
include '/xampp/htdocs/lesreco.com/base/connexionBDD.php';
include '/xampp/htdocs/lesreco.com/base/sessionStart.php';


// PENSER A METTRE EN PLACE UN PASSWORD CONFIRM !!!!




if (!empty($_POST)) {

    // permettra d'afficher les erreurs si le formulaire n'est pas renseigné correctement
    $errors = array();

    $prenom = htmlspecialchars($_POST['prenom']);
    $nom = htmlspecialchars($_POST['nom']);
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $email = htmlspecialchars($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);


    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $requete = $bdd->prepare(
            "INSERT INTO users (prenom, nom, pseudo, email, password)
    VALUES (:prenom,:nom,:pseudo, :email, :password)"
        );
        $requete->execute(array(
            ":prenom" => $prenom,
            ":nom" => $nom,
            ":pseudo" => $pseudo,
            ":email" => $email,
            ":password" => $password
        ));
    } else {
        $errors['email'] = "Format d'email invalide.";
        // echo "Format d'email invalide.";
    }




    header("Location: index.php");
    exit();
}

$template = '/xampp/htdocs/lesreco.com/templates/addUser.phtml';
require '/xampp/htdocs/lesreco.com/templates/layout.phtml';


// // ajout du samedi 10 septembre - video grafikart
// if (empty($_POST['prenom']) || !preg_match('/^[a-zA-Z0-9_]+$/', $_POST['prenom'])) {
//     $errors['prenom'] = "Merci de renseigner un prénom valide (alphanumérique).";
// }
// if (empty($_POST['nom']) || !preg_match('/^[a-zA-Z0-9_]+$/', $_POST['nom'])) {
//     $errors['nom'] = "Merci de renseigner un nom valide (alphanumérique).";
// }
// if (empty($_POST['pseudo']) || !preg_match('/^[a-zA-Z0-9_]+$/', $_POST['pseudo'])) {
//     $errors['pseudo'] = "Merci de renseigner un pseudonyme valide (alphanumérique).";
// } else {
//     $requete = $bdd->prepare('SELECT id FROM users WHERE pseudo = ?');
//     $requete->execute([$_POST['pseudo']]);
//     $pseudo_user = $requete->fetch();
//     if ($pseudo_user) {
//         $errors['pseudo'] = 'Ce pseudo est déjà pris !';
//     }
// }
// if (empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
//     $errors['email'] = "Votre adresse email n'est pas valide.";
// } else {
//     $requete = $bdd->prepare('SELECT id FROM users WHERE email = ?');
//     $requete->execute([$_POST['email']]);
//     $email_user = $requete->fetch();
//     if ($email_user) {
//         $errors['email'] = 'Cet email est déjà utilisé pour un autre compte !';
//     }
// }
// if (empty($_POST['password']) || $_POST['password'] != $_POST['password_confirm']) {
//     $errors['password'] = "Merci de renseigner un mot de passe valide.";
// }

// if (empty($errors)) {
//     //s'il n'y a pas d'erreurs, alors on peut envoyer dans la BDD
//     //voir INSERT INTO dans connexionBDD
// }
