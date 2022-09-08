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

echo 'Bonjour '.$prenom.' '.$nom.' vous avez eu '.$moyenne.'.<br>';
echo "\nBonjour $prenom $nom vous avez eu $moyenne.\n <br>" ;

print_r($tab_note);

echo "\nLes information son contenue dans une varible tableaux \$eleve .\n <br>";
print_r($eleve);

echo "\nLes information son contenue dans une varible tableaux \$clase_6emB .\n<br>";
print_r($clase_6emB);

echo "\nLes information par info\n<br>";
echo $clase_6emB ['nom'][0].'<br>';
echo "\nLes information par info\n <br>";
echo  $clase_6emB ['prenom'][3].'<br>';

echo "\nLes information par info 2\n <br>";

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


echo "<br> Les fontion str native php <br>";
echo "----------------------------------------------------------------------- <br>";
echo "<strong>strlen</strong> ranvoie : la longeur d'une chaine de carater <br> EX Bonjour à tous <br>";
echo strlen("Bonjour à tous").'<br>';
echo "<strong> str_word_count</strong> : revoie le nombre de mots d'une chene de carater <br> EX Bonjour à tous <br>";
echo str_word_count("Bonjour à tous").'<br>';
echo "-----------------------------------------------------------------------";

 ?>
 <p>Lien vert exenple de <strong>conextion</strong> de base de donner mysqul PDO .</p>
 <p>Le non du fichier est:<strong>conextion-PDO-mySQL.php </strong> </p>
 <a href="conextion-PDO-mySQL.php">conextion PDO-mySQL </a>

 <p>Lien vert exenple de <strong>creation </strong> de base de donner mysqul PDO .</p>
 <p>Le non du fichier est:<strong>creation-BD-PDO-mySQL.php</strong> </p>
 <a href="creation-BD-PDO-mySQL.php">création Base PDO-mySQL </a>

 <p>Lien vert exenple de <strong>creation de Table </strong> dans base de donner mysqul exitente PDO .</p>
 <p>Le non du fichier est:<strong>creation-Table-BD-PDO-mySQL.php</strong> </p>
 <a href="creation-Table-BD-PDO-mySQL.php">création Table PDO-mySQL </a>

 <p>Lien vert exenple de <strong>insertion de donner dans Table </strong> dans base de donner mysqul exitente PDO .</p>
 <p>Le non du fichier est:<strong>insertion-donner-PDO-mySQL.php</strong> </p>
 <a href="static-insertion-donner-PDO-mySQL.php">insertion de donner dans Table PDO-mySQL </a>

 <p>Lien vert exenple de <strong>insertion mutiple de donner dans Table </strong> dans base de donner mysqul exitente PDO .</p>
 <p>Le non du fichier est:<strong>static-insertion-mutiple-donner-PDO-mySQL.php</strong> </p>
 <a href="sta-inser-mutiple-BD-PDO-mySQL.php">insertion de plusier donner dans Table PDO-mySQL </a>

 <p>Lien vert exenple de <strong>requete preparer pour insertion multiple dans la base de donner </strong> mysqul exitente PDO .
 <br>Les requete preparer les aventatage minimise le rique d'unjection sql de cette metho plus rapide plus eficase
 <br>la preparation des requete sefetue en trois fase</p>
 <ol>
   <li>fase de preparation: creation d'un tamplaite en laisen setin parametre sans valeur </li>
   <li>fase de compilation: la base de donner analise compile et optimise le template et stoke le resulta sans lexecuter  </li>
   <li>fase d'execution  </li>
 </ol>
 <p>Le non du fichier est : <strong>requete-preparer-insertion-mutiple-donner-PDO-mySQL.php</strong> </p>
 <a href="requet-preparer-BD-PDO-mySQL.php">requete-preparer-pour-insertion-mutiple-donner-PDO-mySQL </a>
