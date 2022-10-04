<?php
require "../vue_HTML/menu2.html";
require "../vue_HTML/article-prevition-meteo.html";
require "connextionBD.php";
require "lectureCSV.php";




$conex = new ConnextionMysql();

$bd = $conex->connextionBD();

$af_teste =$conex ->inserFileCSV_BD();

//var_dump($conex);

// echo "<h3>je provien d'un autre fichier</h3>";
//
// $lecture = new LectureCSV();
//
// $af_teste2 = $lecture->afichageCSV();





// echo "exeple du manuelle php <br/>";
//
// $handle = fopen("../paris.csv", "r");
// while (($data = fgetcsv($handle)) !== FALSE) {
//     var_dump($data);
// }


// INSERT INTO `meteo_jour_plus_deux` (`id`, `AAAA-MM-JJ`, `jours`, `mois`, `années`, `villes`, `periodes`, `resumés`, `id_resumés`, `min_temps`, `max_temps`, `commentaire`)
// VALUES (NULL, '2045-04-10', '10', '04', '2045', 'lyon', 'matin', 'ensoleille', '1', '20', '25', 'Teste il fait beaux aujourd\'hui');
?>
