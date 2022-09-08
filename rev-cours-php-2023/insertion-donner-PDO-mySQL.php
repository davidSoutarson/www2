<?php
echo "Creation de Base de doner avec PDO MySQL a patire d'sripte php.<br>";

$serveur = "localhost";
$login ="root";
$pass = "";

try {
  $connexion = new PDO("mysql:hots=$serveur;dbname=test2",$login,$pass);/* Conextion a MySQL (dbname=teste2 modifiable en fontion:
                                                                          * Du non de la Base bdname=non_de_la_base )*/
  $connexion -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

  $codesql ="CREATE TABLE Visiteurs(
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50),
    prenom VARCHAR(50),
    email VARCHAR(70)
    )";//cette varible fasilite la conprention et contien le code sql a executer
    
  $connexion -> exec($codesql);
  echo "Table Visiteurs créée";
}
catch (PDOException $e) {
  echo "Echeque de la conextion :" . $e ->getMessage();
}

 ?>

<p> <a href="index.php">retour a index</a> </p>
