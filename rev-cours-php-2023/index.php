<?php
$prenom = 'Marc';
$nom = 'Doe';
$note1 = 10;
$note2 = 20;
$moyenne = ($note1 + $note2) / 2 ;

$tab_note = [10, 20, 15,];

$eleve =[
  'nom'=> 'Doe',
  'prenom' => 'Marc',
  'notes' => [10, 20, 15, 13,]
];

$clase_6emB =[
  'nom' => ['Edisonne', 'Hentagne', 'Devincie', 'Ford', 'Guetes', ],
  'prenom' => ['Thomas', 'Halbert', 'Leonard', 'Henrie', 'Bille', ],
];

// echo 'Bonjour '.$prenom.' '.$nom.' vous avez eu '.$moyenne.'.';
// echo "\nBonjour $prenom $nom vous avez eu $moyenne.\n" ;
//
// print_r($tab_note);
//
// echo "\nLes information son contenue dans une varible tableaux \$eleve .\n";
// print_r($eleve);
//
// echo "\nLes information son contenue dans une varible tableaux \$clase_6emB .\n";
// print_r($clase_6emB);
//
// echo "\nLes information par info\n";
// echo $clase_6emB ['nom'][0];
// echo "\nLes information par info\n";
// echo  $clase_6emB ['prenom'][0]; 

echo "\nLes information par info 2\n";

for ($i=0; $i < 5 ; $i++) {
$teste[] = $clase_6emB ['nom'] [$i]."-".$clase_6emB ['prenom'] [$i] ;
}

//print_r($teste);

//echo $teste[3];

$ttxClase = [
  'NP' => $teste,
  'notes' => [10, 20, 15, 13,]
];

var_dump($ttxClase);
 ?>
