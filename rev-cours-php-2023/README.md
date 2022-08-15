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

PHP le langage php fonction grase a un esintax presise et rigoureus.
Le premier travail à fournir est d’observer attentivement ces règles syntaxiques
puis de les reproduire pas à pas.

PHP et un langage script open source in venter par Ramus Lendorf.

langage  script orienter serveur ter proche du langage du langage C,
PHP permet de créer des apllicatiopn et des page webe dinmique.

afichage avec double "" ou simple '' quote

si le texte que l'on afficher entre simple quote compore ce une apostrophe ' qui et interprète comme une simple quote
php nous done la posibiliter de l'echaper en fesent preseder la pontuation  d'un entie slash \

si non nous povons utiliser les double quote ""

php dipose de tois type de comentaire

// pour cometer une ligne
/* */ pour cometer un boque de ligne
\# pour comenter une ligne  
