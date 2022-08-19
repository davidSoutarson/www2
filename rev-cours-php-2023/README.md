PHP revision
Les prerequisite pour PHP

avoir ou installer un editere de text posendent une coretion "reconesense" syntatique.
avoire ou d'intatelle un serveur local comme WAMP MAMP ou LAMP. ce serveur nes pas un serveur a utiliser en production.

dans le cas wamp (et e des otre serveur ) il se compose en genelae comme suie:

php : interprète le langage PHP ;

ApacheServer  : affiche le résultat de l’interprétation ;

MySQLServer : stocke et rend accessible des données stockées ;

phpMyAdmin : facilite la gestion de MySQL Server avec une interface simple.

creation d'un fichier PHP

 il en exite deux type chemin d'axer au fichier
 on parle de chemin pour faire un lien entre 2 page ou avec un fichier externe.

Exemple docier/page.php

Le chemin absolu (slash en préfixe du chemin) : La cible va être cherchée en partant de la racine du
système de fichiers, représentée par le slash initial « / ».

Exemple : /origine/dossier/page.php

Enregistrons le fichier (Menu : Fichier > Enregistrer sous) dans le répertoire essai que nous allons créer
dans le répertoire www de WAMP.

Le chemin d’accès au script est donc E:\wamp\www\essai\test.php Exemple de chemin absolut.

les chemin relatife

A linverve un chemin relatife depent  d'un dossier de travail

../ permet de remonter dans les dossier
./page 1
essai/test.php

vocabulaire :

crypte : fichiers créer ou modifier avec un editeur de texte
page : fichiers aficher dans un navigateur

 URL: est construite comme ceci : http://nomduserveur/dossier/fichier.php

Le php un langage serveur

SYTAXSE DU PHP

PHP le langage php fonction grase a un esintax presise et rigoureus.
Le premier travail à fournir est d’observer attentivement ces règles syntaxiques
puis de les reproduire pas à pas.

PHP et un langage script open source in venter par Ramus Lendorf.

langage  script orienter serveur ter proche du langage du langage C,
PHP permet de créer des apllicatiopn et des page webe dinmique.

 les balise php

 Les balises PHP déterminent les blocs de code PHP. Lorsque le processeur
PHP analyse un fichier, il cherche les balises d’ouverture et de fermeture,
qui délimitent le code qu’il doit interpréter.

< ? php

code php  qui sera interpréter

?>

afichage avec double "" ou simple '' quote

si le texte que l'on afficher entre simple quote compore ce une apostrophe ' qui et interprète comme une simple quote
php nous done la posibiliter de l'echaper en fesent preseder la pontuation  d'un entie slash \

si non nous povons utiliser les double quote ""

php dipose de tois type de comentaire

// pour cometer une ligne

/* */ pour cometer un boque de ligne

\# pour comenter une ligne  

Declaration de variable

les variable sont sont des element fondamenteaux de tout lengage de programation

Les variable en php comense le signe $ et se termine par ;

le poin vergule et obligatoir et sinifie la fin d'une intruction

le signe egale et unsigne afectation ou atribution

$nomDeLaVarible ;

$jour1 = "lundi";

Un nom de variable doit être explicite, et de préférence en anglais
(langue internationale)

notation en lowerCamelCase

firstDayWeek = ' lundi ';

le point permet de juxtaposer deux element om parle d'operteur de cocatenation

$sport = 'basket';

echo 'nous pratiquon le ' .$sport ;

$saison = 'autone';

echo 'les feuilles tombent en <strong>' .$saison . '</strong>'

Definir une constante

un contante aura un nom de constate et une valeur; par convention le nom des constate est
en letre CAPITE majuscule el n'est preseder docun signe.

Pour déclarer une constante, nous utilisons la fonction PHP define.
 – nous ouvrons une parenthèse ;
 – nous écrivons le nom de la constante entre deux quotes ;
 – nous ajoutons une virgule pour séparer le nommage de la constante
avec la définition de sa valeur ;
 – nous écrivons ensuite la valeur de la constante (en utilisant les quotes
si cette valeur est une chaîne de caractères) ;
 – nous fermons la parenthèse ;
 – le point-virgule indique la fin de l’instruction

 define('HOME,index.php');
 echo '<a href = "'.HOME.'"'> Acceile </a>

 Les condition les operateur et les boucles

 I Les conditions

  A. if else

  B. Switch

  II. Les opérateurs

  A . Opérateurs d’assignation ou affectation:

  l'operateur d'assignation lors de la declaration de variable et le signe = égale

  B . Opérateurs de comparaison

  les Opérateurs de comparaison permete de compare des valeurs entre elles

  liste des operateur de compareson  == egaliter != diferan  === identique >srictement superieur <srictement inferieur  >=superieur ou egal  <= inferieur ou egale

  C . Opérateurs de calcul

  liste des operateur de calcule + Adition - Soustraction * Multiplication / Divition  % Modulo

  D . Opérateurs combinés

  +=   PLUS EGALITER
  $i++ INCREMENTATION
  $i-- DECREMENTATION
  .=   POINT EGALE CONTCATENATION ABREGER

  E . Opérateurs logiques : AND, OR

  AND c'est un est logiques cela siyfie que les propositions doive etre vais en maime temps.


  OR c'est un ou logique et XOR et le ou logique exclusif, qui signifie
  ou bien : soit l'une ou soit l'autre des propositions doit être vraie.
  Par Exemple, si nous cherchons un nombre qui soit plus grand que 5 ou plus
  petit que 7, le résultat peut être n’importe quel nombre.
  En effet, 24 sera plus grand que 5, tandis que 3 sera plus petit que 7.


III. Les boucles

  A . La boucle while

  B . La boucle for
  La boucle for est une structure de contrôle très utilisée.


  C . La boucle foreach
  La boucle foreach est utilisée uniquement dans le cas des tableaux de
données (array) et est détaillée dans le chapitre des tableaux de données.
