<?php

/**
*
*/
class ConnextionMysql
{
  public function connextionBD()
  {
    $mysqli = new mysqli('localhost','root','','bulletin_meteo');
    $mysqli->set_charset("uf8");

    if ($mysqli->connect_errno) {
      printf("Echeque de la connexion %s\n", $mysqli->connect_error);
      exit();
    }
    else {
      echo "<p> conextion efectuer F1 OK </p>";
     $mysqli->query("INSERT INTO `meteo_jour_plus_deux` (`id`, `AAAA-MM-JJ`, `jours`, `mois`, `années`, `villes`, `periodes`, `resumés`, `id_resumés`, `min_temps`, `max_temps`, `commentaire`) VALUES (NULL, \'2222-05-06\', \'06\', \'05\', \'2222\', \'nime\', \'matin\', \'ensoleille\', \'4\', \'5\', \'11\', \'teste manuuele\');");

    }
  }


  public function inserFileCSV_BD()
  {
    echo "<hr>class ConnextionMysql <hr><hr>Je suis aficher a l'aide d'un fontion OBJET inserFileCSV_BD </br>";
    $row = 1;
    if (($handle = fopen("../paris.csv", "r")) !== FALSE) {
      while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);
        // echo "<hr> <p> $num champs à la ligne $row: <br /></p>\n";
        $row++;
        for ($c=0; $c < $num; $c++) {

          echo $data[$c] . "<br />";

          list($dateA_M_J,$ville,$periode,$resume,$id_resume,$min_temp,$max_temp,$commentaire) = explode(";" ,$data[$c]);

          list($anner,$mois,$jour) = explode("-",$dateA_M_J);

          //phase teste insertion


        }

      }
      fclose($handle);
    }

  }

}


?>
