<?php

$row = 1;
if (($handle = fopen("../paris.csv", "r")) !== FALSE) {
  while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
    $num = count($data);
    echo "<hr> <p> $num champs à la ligne $row: <br /></p>\n";
    $row++;
    for ($c=0; $c < $num; $c++) {

      echo $data[$c] . "<br />";

      list($dateA_M_J,$ville,$periode,$resume,$id_resume,$min_temp,$max_temp,$commentaire) = explode(";" ,$data[$c]);

      list($anner,$mois,$jour) = explode("-",$dateA_M_J);


      echo "<ul>
      <li> Date AAAA-MM-JJ:".$dateA_M_J."</li>
      <li> Jour:".$jour." Mois:".$mois." Anner:". $anner. "</li>
      <li> ville:".$ville."</li>
      <li> periode:".$periode."</li>
      <li>  # resumer:".$resume. "</li>
      <li> id_resumer:".$id_resume."</li>
      <li> temperatur Minimale:".$min_temp. "</li>
      <li> temperatur Maximale:".$max_temp. "</li>
      <li> commentaire:".$commentaire ."</li>
      </ul> <hr>";

    }

  }
  fclose($handle);
}


 ?>
