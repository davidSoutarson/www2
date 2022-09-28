<?php
echo "<p>Les requete preparer: une metode conventionnele pour
      <br>la selection de doner avec PDO MySQL a patire d'sripte php.</p>";

echo "<p> La requete : SELECT * FROM visiteurs  <br>
      Permet de selectioner l'ansemble du contenue table visiteurs </p>";

$serveur = "localhost";
$login ="root";
$pass = "";

try {
  $connexion = new PDO("mysql:hots=$serveur;dbname=test2",$login,$pass);/* Conextion a MySQL (dbname=teste2 modifiable en fontion:
                                                                          * Du non de la Base bdname=non_de_la_base )*/
  $connexion -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

  $requete = $connexion ->prepare("
            SELECT * FROM visiteurs");

  $requete->execute();

  $resulta = $requete->fetchall();

  echo "<pre>";
  print_r($resulta);
  echo "<pre>";

}
catch (PDOException $e) {
  echo "Echec insertion :" . $e ->getMessage();
}

 ?>

<p> <a href="index.php">retour a index</a> </p>
