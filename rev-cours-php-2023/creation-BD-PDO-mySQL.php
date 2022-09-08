<?php
echo "Creation de Base de doner avec PDO MySQL a patire d'sripte php.<br>";

$serveur = "localhost";
$login ="root";
$pass = "";

try {
  $connexion = new PDO("mysql:hots=$serveur",$login,$pass);//conextion a MySQL
  $connexion -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

  $connexion ->exec("CREATE DATABASE test2");
  echo "Base de donner a bien été crée";
}
catch (PDOException $e) {
  echo "Echeque de la conextion :" . $e ->getMessage();
}




 ?>

<p> <a href="index.php">retour a index</a> </p>
