<?php
/**
*
*/
class ConnextionMysql
{


  public function __construct()
  {
    echo "<p> <em> je suis constuie!<br>Chaqune de mais instense peu etre utiliser indépendament. :)   </em> </p>";

  }


  public function connextionBD() //permette la conection a la basse de donner et ecrie un mesage en cas de sucer ou decheque
  {
    $mysqli = new mysqli("localhost","root","","bulletin_meteo");//conextion bd
    $mysqli->set_charset("uf8");
    if ($mysqli->connect_errno) {
      printf("<p> <em>Echeque de la connexion %s\n </em></p>", $mysqli->connect_error);
      exit();
    }
    else {

      echo "<p> <em> Conextion a la base de donner efectuer. :) </em> </p>";
    }

  } //fin public fonction

  // cette fontion evite la reecriture apre atualisation se qui evite un replisage de la table non souter
  public function verifBD() //verifie la presense ID dans la table meteo01. si il ny en apas return $vide
  {
    $mysqli = new mysqli("localhost","root","","bulletin_meteo");

    $res = $mysqli->query(
      "SELECT * FROM meteo01  ");
      $row = $res->fetch_assoc();

      if (empty($row['id'])) {
        $vide = 1;
        return($vide);
      }
    } //fin public fonction

    public function lecturBD() //lie la table et afiche et les donner
    {
      $mysqli = new mysqli("localhost","root","","bulletin_meteo");//conextion bd

      $result = $mysqli->query(
        "SELECT * FROM meteo01 WHERE jours > 5 ORDER BY jours ASC ");

        echo "<h2> Demain et après-demain a Paris </h2>" ;

        while ($row = $result->fetch_assoc())
        {
          echo "<br>".$row['villes']." date  ".$row['dates']." Indice :".$row['id_resumes']."<br> <br>
          Meteo du: ".$row['jours']."-".$row['mois']."-".$row['annees']." pour la ville de: "
          .$row['villes']." ".$row['periodes']." ".$row['resumes']." temperatur max: "
          .$row['max_temps']." min: ".$row['min_temps']. "<br> Les tendance meteo pour ";
          if ($row['periodes'] == "matin")
          {
            echo "le ".$row['periodes']." ".$row['commentaires']."<hr>";
          }
          elseif ($row['periodes'] == "après-midi")
          {
            echo "l'".$row['periodes']." ".$row['commentaires']."<hr>";
          }else {
            echo "la ".$row['periodes']." ".$row['commentaires']."<hr>";
          }

        }

      }  //fin public fonction



      public function ecrituBD()// lis le fichier csv stok le donner dans des varable. puis ecrie dans la table grase a ses varible
      {
        $row = 1;
        if (($handle = fopen("./paris.csv", "r")) !== FALSE) {
          while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            $num = count($data);

            $row++;
            for ($c=0; $c < $num; $c++) {
              //recuperation des valeur dans des varible avec les function native php list() et explode()
              list($dateA_M_J,$ville,$periode,$resume,$id_resume,$min_temp,$max_temp,$commentaire) = explode(";" ,$data[$c]);

              list($anner,$mois,$jour) = explode("-",$dateA_M_J);

              //code sql

              $mysqli = new mysqli("localhost","root","","bulletin_meteo");//conextion bd

              $result = $mysqli->query("INSERT INTO meteo01 (
                id,
                dates,
                jours,
                mois,
                annees,
                villes,
                periodes,
                resumes,
                id_resumes,
                max_temps,
                min_temps,
                commentaires)
                VALUES (
                  NULL,
                  '$dateA_M_J',
                  '$jour',
                  '$mois',
                  '$anner',
                  '$ville',
                  '$periode',
                  '$resume',
                  '$id_resume',
                  '$max_temp',
                  '$min_temp',
                  '$commentaire')
                  ");
                }
              }
            }
            echo "jai tout bien ecrie en Base de doner<br>";
          } //fin public fonction

        }


        ?>
