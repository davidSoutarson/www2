<?php
echo "insertion de doner avec PDO MySQL a patire d'sripte php.<br>";

$serveur = "localhost";
$login ="root";
$pass = "";

try {
  $connexion = new PDO("mysql:hots=$serveur;dbname=test2",$login,$pass);/* Conextion a MySQL (dbname=teste2 modifiable en fontion:
                                                                          * Du non de la Base bdname=non_de_la_base )*/
  $connexion -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

//  $codesql ="";

//  $connexion -> exec($codesql);
  echo "insertion reusie";
}
catch (PDOException $e) {
  echo "Echeque de la conextion :" . $e ->getMessage();
}

 ?>

<p> <a href="index.php">retour a index</a> </p>
