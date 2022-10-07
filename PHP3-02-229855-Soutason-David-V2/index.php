<?php
require './class/connextionBD.php';

echo "<h2>Demande</h2>

<p>Nous supposons qu’une fois par jour, nous nous connectons sur l’URL de ce flux : par exemple http://localhost/
paris.csv si le fichier CSV est localisé à la racine de votre serveur.</p>

<p>L’objectif est de récupérer les données, de les enregistrer en base de données puis de les afficher sur une page.
Nous afficherons uniquement les valeurs météo du lendemain et du surlendemain — la date du jour de référence
étant le 5 décembre 2100.</p> <hr> <hr>";

$conextion = new ConnextionMysql;

$conecter = $conextion->connextionBD();


//la condition utilile l'objer vrifBD qui verifie si la table et vide avc une abcence id
if (!empty( $verif= $conextion->verifBD() ) ) {
  echo "<p> <em> je vrifie que la table soi vide. Avan d'écrie les doner  </em> </p>";
  $ecritur = $conextion->ecrituBD(); //ecrie en bases de données le contenue du fichier csv
}else {
  echo "<p> <em> La table et plaine. je n'écrie donc pas les doner.  </em> </p>";
}

echo "<h1> Bulltin metéo </h1>";

$lectur= $conextion->lecturBD();// lit la base de donner et afiche les donner voulue
 ?>
