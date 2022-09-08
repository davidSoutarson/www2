<?php
$server = "localhost";
$login ="root";
$pass = "";


try{
  $connexion = new PDO("mysql:host=$server;dbname=test_de_base",$login,$pass);
  $connexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Conection a la base de donner reusie";
}

catch(PDOException $erreur){
  echo "Echeque de la conextion :" . $erreur->getMessage();
}
 ?>

<p> <a href="index.php">retour a index</a> </p>  
