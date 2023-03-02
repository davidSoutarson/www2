<?php
  echo "<p>Bonjour! je suis un fichier PHP</p>";

  $notes = ["do"=>"C", "ré"=>"D", "mi"=>"E", "fa"=>"F", "sol"=>"G", "la"=>"A", "si"=>"B",];

 ?>

 <select class="" name="">
   <?php foreach ($notes as $noteClasique => $noteUS) {
     echo "<option value='$noteClasique'> $noteClasique </option>";
   } ?>
 </select>
   
