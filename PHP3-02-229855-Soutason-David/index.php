<?php
require "vue_HTML/header.html";


echo "exeple du manuelle php";

$row = 1;
if (($handle = fopen("paris.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);
        echo "<p> $num champs à la ligne $row: <br /></p>\n";
        $row++;
        for ($c=0; $c < $num; $c++) {
            var_dump($data); 
            echo $data[$c] . "<br /> <hr>\n";

        }
    }
    fclose($handle);
}

echo "exeple du manuelle php <br/>";

$handle = fopen("paris.csv", "r");
while (($data = fgetcsv($handle)) !== FALSE) {
    var_dump($data);
}


 ?>
