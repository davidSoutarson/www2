<?php
$serveur = "localhost";
$login ="root";
$pass = "";

//try catch me permet de gere les exeption.
try{
  $connexion = new PDO("mysql:host=$serveur;dbname=test_de_base",$login,$pass);
  $connexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//ci il y a une erreur genere un mesage .
  echo "Conection a la base de donner reusie";
}

catch(PDOException $e){
  echo "Echeque de la conextion :" . $e ->getMessage();
}
 ?>

<p> <a href="index.php">retour a index</a> </p>
