<?php
// include '/xampp/htdocs/lesreco.com/base/config.php';


function getConnexion()
{
    require '/xampp/htdocs/lesreco.com/base/config.php';

    return new PDO("mysql:host=$hostname;dbname=$dbname", $username, $password);
    // $bdd->exec("SET CHARACTER SET utf8");
    // $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}





// BASE SAINE
// try {
//     $bdd = new PDO("mysql:host=$hostname;dbname=$dbname", $username, $password);
//     $bdd->exec("SET CHARACTER SET utf8");
//     $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     // $bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ); //quand activé, affiche une erreur
// }

// // à retirer lors de la MISE EN PRODUCTION
// catch (PDOException $e) {
//     echo "Connection to BDD failed: " . $e->getMessage();
// }
