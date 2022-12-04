<?php
include '/xampp/htdocs/lesreco.com/base/connexionBDD.php';
include '/xampp/htdocs/lesreco.com/base/sessionStart.php';
// include '/xampp/htdocs/lesreco.com/index.php';
$bdd = getConnexion();



// AJOUT D'UN FILM DANS LA TABLE DE JOINTURE
// $requete = $bdd->prepare(
//     "UPDATE films_in_users
//     INNER JOIN users ON users.id = films_in_users.id_users
//     INNER JOIN films ON films.id = films_in_users.id_films
//     SET id_films = films.id, id_users = users.id
//     WHERE films.id = ? AND users.id = ?"
// );


// INSERT INTO
// $requete = $bdd->prepare(
//     "INSERT INTO films_in_users (id_films, id_users)
//     SELECT films_in_users.id_films, films_in_users.id_users
//     -- FROM films
//     INNER JOIN films ON films.id = films_in_users.id_films
//     INNER JOIN users ON users.id = films_in_users.id_users
//     WHERE users.id = ? AND films.id = '" . $_POST["id"] . "'"
// );
// $requete->execute(
//     [
//         $_SESSION["auth"]["id"]
//     ]
// );


$requete = $bdd->prepare(
    "INSERT INTO films_in_users (id_films, id_users)
    VALUES (films.id, ?)"
);
$requete->execute(
    [
        $_SESSION["auth"]["id"]
    ]
);


// MODELE SQL STACKOVERFLOW

// INSERT INTO orders ( userid, timestamp) 
// SELECT o.userid , o.timestamp 
// FROM users u 
// INNER JOIN orders o ON  o.userid = u.id


// REMPLACER PAR UN HEADER LOCATION
$template = '/xampp/htdocs/lesreco.com/templates/index.phtml';
include '/xampp/htdocs/lesreco.com/templates/layout.phtml';
