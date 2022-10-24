<?php
// Le protocole HTTP que l'on utilise dans le web est un protocole de transmission dit sans état
// Quand on entre l'URL d'un site, le protocole HTTP la transmet au serveur puis renvoie une réponse HTML correspondante avant de passer à autre chose
// Si, à partir de la page d'accueil, vous cliquez sur un lien vers une autre page du même site rien ne lui permet de savoir que ces 2 requêtes proviennent du même utilisateur
// Les sessions viennent palier à ce problème et elles ne sont accessibles qu'à l'utilisateur

// On initialise la session :
session_start();

// On affiche le contenu de la session :
var_dump($_SESSION);

// On créé une valeur
$valeur = "J'ai inséré cette valeur de session dans la page " . $_SERVER["SCRIPT_NAME"];
$_SESSION["insertionValeur"] = $valeur;
$_SESSION["nombre"] = 0;

echo "<a href='sessions2.php'>Aller vers l'autre page...</a>";

// Si les cookies ne sont pas acceptés par l'utilisateur ou qu'ils sont désactivés sur le navigateur, alors une constante nommée SID est initialisée
// Le nom de la session est récupérable en appelant la fonction session_name()
// L'identifiant de session est récupérable en appelant la fonction session_id()