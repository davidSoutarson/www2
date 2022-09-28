<?php
echo "<p>Modifer une table <br>
      <br>la selection de doner avec PDO MySQL a patire d'sripte php.</p>";

echo "<p> La requete : ALTER TABLE visiteurs  <br>
      Permet de modifier table visiteurs </p>";

$serveur = "localhost";
$login ="root";
$pass = "";

try {
  $connexion = new PDO("mysql:hots=$serveur;dbname=test2",$login,$pass);/* Conextion a MySQL (dbname=teste2 modifiable en fontion:
                                                                          * Du non de la Base bdname=non_de_la_base )*/
  $connexion -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

  $requete = "
      ALTER TABLE visiteurs ADD age INT(100)";

  $connexion->exec($requete);

}
catch (PDOException $e) {
  echo "Echec insertion :" . $e ->getMessage();
}

 ?>

<p> <a href="index.php">retour a index</a> </p>
