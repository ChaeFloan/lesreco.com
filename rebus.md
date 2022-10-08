INDEX.PHP

// // penser à rajouter l'image quand l'uploader sera dispo
// if (isset($_POST['titre']) && isset($\_POST['genre']) && isset($\_POST['etiquettes'])) {
// $titre = $\_POST['titre'];
// // $image = $\_POST['image'];
// $genre = $\_POST['genre'];
// $etiquettes = $\_POST['etiquettes'];

// // penser à rajouter l'image quand l'uploader sera dispo
// $req = mysqli_query($conn, 'INSERT INTO \'film\'(\'titre\', \'genre\', \'etiquettes\') VALUES (\'$titre\', \'$genre\', \'$etiquettes\');

// if ($req) {
// echo 'insertion effectuée avec succès !';
// } else {
// echo 'failed';
// }
// } else {
// echo 'WTF';
// }

---

// if(!empty($_POST)){
//     //Enregistrer les infos renseignées dans les input dans la BDD
//     $query = $db->prepare(
//         "INSERT INTO film (titre, genre, etiquettes)
//         VALUES ('$titre', '$genre', '$etiquettes')"
// );
// $query->execute([
// $\_POST["titre"],
// $\_POST["genre"],
// $\_POST["etiquettes"],
// ]);

// // header("Location: index.html");
// // exit();
// } else {
// echo 'error occured';
// }

////////////////////////////////////////////////////////////////

INSERT.PHP

// penser à rajouter l'image quand l'uploader sera dispo
// if (isset($_POST['titre']) && isset($\_POST['genre']) && isset($\_POST['etiquettes'])) {
// $titre = $\_POST['titre'];
// // $image = $\_POST['image'];
// $genre = $\_POST['genre'];
// $etiquettes = $\_POST['etiquettes'];

// // penser à rajouter l'image quand l'uploader sera dispo
// $req = mysqli_query($conn, 'insert into film(titre, genre, etiquettes) values (\'$titre\', \'$genre\', \'$etiquettes\')');

// if ($req) {
// echo 'insertion effectuée avec succès !';
// } else {
// echo 'failed';
// }
// } else {
// echo 'WTF';
// }

// **\*\*\*\***\*\*\*\***\*\*\*\***\*\*\***\*\*\*\***\*\*\*\***\*\*\*\***
// $serveur = 'localhost';
// $dbname = 'lesreco';
// $user = 'root';
// $pass = '';

// try{
// //On se connecte à la BDD
// $dbco = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
// $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// }
// catch(PDOException $e){
// echo 'Erreur : '.$e->getMessage();
// }

//////////////////////////////////////////////////////////////////
CONNEXION.PHP

// $user = 'root';
// $mdp = '';
// $db = 'lesreco';
// $server = 'localhost';

// // $link = mysqli_connect($user, $mdp, $db, $server);
// $dbco = new PDO('mysql:host=$server;db=$db;$user,$mdp');
// $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// if ($dbco) {
// echo 'Connexion établie';
// } else {
// // die(mysqli_connect_error());
// echo 'ERREUR CONNEXION DB';
// }

---

// $dbhost = 'localhost';
//  $dbuser = 'root';
//  $dbpass = '';
//  $db = 'lesreco';
// //  $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die('Connect failed: %s\n'. $conn -> error);
//  $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db) or die('Connect failed: %s\n'. $conn -> error);

// if ($conn) {
// echo 'Connexion établie';
// return $conn;

// } else {
// // die(mysqli_connect_error());
// echo 'ERREUR CONNEXION DB';
// }

---

// function getConnexion() {
// $dbhost = 'localhost';
// $dbuser = 'root';
// $dbpass = '';
// $db = 'lesreco';

// return new PDO("mysql:host=$dbhost;dbname=$db;charset=UTF8", $dbuser, $dbpass, [
// PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
// PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
// ]);
// }
