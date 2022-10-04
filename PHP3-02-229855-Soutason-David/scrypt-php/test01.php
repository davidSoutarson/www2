<?php
echo "je suis le ficher test01";
require "../vue_HTML/menu2.html";

echo "<h1>Test Prevision meteo </h1>";

echo "exeple du manuelle php <hr> <hr>  <br>";

$row = 1;
if (($handle = fopen("../paris.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);
        echo "<hr><p> $num champs à la ligne $row: <br /></p>\n";
        $row++;
        for ($c=0; $c < $num; $c++) {

            echo $data[$c] . "<br /> <hr>\n";

            $res = explode(";" ,$data[$c]);
            //var_dump($res) ;
            //echo $res[0] .">>". $res[1] .">>".$res[2].">>". $res[3] .">>".$res[4].">>". $res[5] .">>".$res[6].">>".$res[7]  ;

          list($dateA_M_J,$ville,$periode,$resume,$id_resume,$min_temp,$max_temp,$commentaire) = explode(";" ,$data[$c]);

          echo "<br> Date:".$dateA_M_J;
          list($anner,$mois,$jour) = explode("-",$dateA_M_J);
          echo "<br>Jour:".$jour." Mois:".$mois." Anner:". $anner ;
          echo "<br> ville:".$ville;
          echo "<br># periode:".$periode;
          echo "<br> resumer:".$resume;
          echo "<br> id_resumer:".$id_resume; // Pas de logique dans cette information: pour id_resumer:1 Temps brumeux|ou|Une pluie fine et attendue
          echo "<br> temperatur Minimale:".$min_temp;
          echo "<br> temperatur Maximale:".$max_temp;
          echo "<br> commentaire:".$commentaire;


        }

        $neufLigne[] = $res;

    }

    fclose($handle);
}


  //var_dump($neufLigne);

  foreach ($neufLigne as $key =>$value ) {
    echo $key ."ligne <br>";
    foreach ($value as $f => $g) {
      echo $f. ">>". $g ."<br> ";
    }
    echo "<hr>";
  }


echo "<br> <br> t4 #################################dernire info########################################### <br>";
echo "<br> Date:".$dateA_M_J;
list($anner,$mois,$jour) = explode("-",$dateA_M_J);
echo "<br>Jour:".$jour." Mois:".$mois." Anner:". $anner ;
echo "<br> ville:".$ville;
echo "<br># periode:".$periode;
echo "<br> resumer:".$resume;
echo "<br> id_resumer:".$id_resume; // Pas de logique dans cette information: pour id_resumer:1 Temps brumeux|ou|Une pluie fine et attendue
echo "<br> temperatur Minimale:".$min_temp;
echo "<br> temperatur Maximale:".$max_temp;
echo "<br> commentaire:".$commentaire;




 ?>
