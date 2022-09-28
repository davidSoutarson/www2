<?php
echo "<p>Les requete preparer: une metode conventionnele pour
      <br>l'insertion de doner avec PDO MySQL a patire d'sripte php.</p>";

$serveur = "localhost";
$login ="root";
$pass = "";

try {
  $connexion = new PDO("mysql:hots=$serveur;dbname=test2",$login,$pass);/* Conextion a MySQL (dbname=teste2 modifiable en fontion:
                                                                          * Du non de la Base bdname=non_de_la_base )*/
  $connexion -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

  $requete = $connexion ->prepare(
    "INSERT INTO visiteurs(nom,prenom,email)
    VALUES(:nom,:prenom,:email)" //marceur
  ); //etaple 1

  $requete->bindParam(':nom', $nom);
  $requete->bindParam(':prenom', $prenom);
  $requete->bindParam(':email', $email);

  $nom ="Meliodas";
  $prenom ="Dragon-de-la-colaire";
  $email ="seven.deadly.sins@live.fr"; /*Les valeur stoker dans les varible
  $nom $prenom $email sont normalement des valeur isue d'un fomulaire et les teste
  de validation de formulaire*/

  $requete->execute();

  echo "teste de requete preparer reusie";
}
catch (PDOException $e) {
  echo "Echec insertion :" . $e ->getMessage();
}

 ?>

<p> <a href="index.php">retour a index</a> </p>
