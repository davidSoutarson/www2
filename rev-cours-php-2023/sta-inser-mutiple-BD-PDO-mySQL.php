<?php
echo "insertion de doner avec PDO MySQL a patire d'sripte php.<br>";

$serveur = "localhost";
$login ="root";
$pass = "";

$nom ="factice";                 // Les valeur stoker dans les varible
$prenom ="user";                  // $nom $prenom $email sont normalement des
$email ="factice.user@live.fr";   // valeur isue d'un fomulaire et les teste
                                 // de validation de formulaire

try {
  $connexion = new PDO("mysql:hots=$serveur;dbname=test2",$login,$pass);/* Conextion a MySQL (dbname=teste2 modifiable en fontion:
                                                                          * Du non de la Base bdname=non_de_la_base )*/
  $connexion -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

  $insertion ="INSERT INTO Visiteurs(nom,prenom,email)
                          VALUES('Durant','Victor','victor.durant@gmail.com'),
                          ('Dupon','inspecteur','tintin@gmail.com'),
                          ('$nom','$prenom','$email')";

  $connexion ->exec($insertion);
  echo "insertion reusie";
}
catch (PDOException $e) {
  echo "Echec insertion :" . $e ->getMessage();
}

 ?>

<p> <a href="index.php">retour a index</a> </p>
