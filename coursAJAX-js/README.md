Cours Se perfectionner en javascript: Utiliser Ajax pour dialoguer avec un serveur
==================================================================================
travail realiser par: David Soutarson https://youtu.be/J0pm1mp77Pw
---------------------
* Nom. Soutarson
* Prenom. David
* Eleve.  229855

AJAX c'est quoi? Ca ser a quoi?
=================================
## AJAX: acronym (Asynchron javascript And XML)
AJAX est une technique pour créer des applications web plus dynamiques, plus rapides et plus interactives.

Dans une application web utilisant Ajax, lorsqu’un utilisateur clique sur un lien
ou quand il soumet un formulaire, la requête, préparée par JavaScript est envoyée au serveur qui la traite
puis renvoie sa réponse.

Lutilisation AJAX permet de generer des  requêtes Asynchron Plusieurs requêtes peuvent donc être en
cours d’exécution simultanément en tâches de fond.

A inverse dans une application web sans Ajax, lorsqu’un utilisateur clique sur un lien ou quand
il soumet un formulaire, sa requête est transmise au serveur qui la traite puis renvoie sa réponse
sous la forme d’une page HTML pour remplacer la page existante. On dit que la requête est
synchrone.

## prerequi utiliser AJAX & Syntax JavaScript

Avoir de bonne notion dans les languages informatique suivant: HTML, PHP, javascript, CSS.

syntaxe:

varible=new XMLHttpRequest();

L’objet JavaScript XMLHttpRequest permet l’échange de données asynchrones, en tâche de fond, avec le serveur.

Comme souvant gére des moteur de recherche oblige pour les enciene vertion intenet exploreur IE6 IE5

xmlhttp=new ActiveXObject ("Mricrosoft.XMLHTTP");

Pour une large Compatibiliter: EX

var xmlhttp;

if (window.XMLHttpRequest)

{// code pour IE7+, Firefox, Chrome, Opera, Safari

  xmlhttp = new XMLHttpRequest ();  
}

else

{  
  xmlhttp=new ActiveXObject ("Mricrosoft.XMLHTTP");
   
}  
