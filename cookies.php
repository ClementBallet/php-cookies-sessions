<?php
// Les cookies peuvent être lûs par PHP et JavaScript, ce qui peut être très pratique.
// Il sont sous la forme de petits fichiers avec des associations clé/valeur et servent à conserver des données utilisateurs (des choix, des informations, etc...)
// Aujourd'hui, le gros inconvénients des cookies est que l'utilisateur doit donner son consentement pour que les cookies soient créés sur un site

// On les affiche avec la variable superglobale $_COOKIE
var_dump($_COOKIE);

// On créé une nouvelle entrée avec setCookie()
setcookie("prenom", "Toto");
// On peut ajouter une durée de vie au cookie, par exemple pour 1 jour (par défaut, si il n'y a pas de temps alors le cookie est valide jusqu'à la fermeture de la session utilisateur) :
setcookie("estMajeur", "oui", time()+86400);
// On peut écrire plusieurs valeurs dans une même clé :
setcookie("plusieursValeurs[ville]", "Lyon");
setcookie("plusieursValeurs[adresse]", "15, rue des platanes");
// On peut insérer également des variables :
setcookie("userAgent", $_SERVER["HTTP_USER_AGENT"]);

// On lit une donnée stockée dans un cookie en utilisant la variable $_COOKIE avec le nom de la clé entre crochets :
echo $_COOKIE["prenom"];
echo "<br>";
// Parcourir un tableau de cookies :
foreach ($_COOKIE["plusieursValeurs"] as $cle => $valeur)
{
    echo "Le cookie nommé $cle contient la valeur $valeur <br>";
}
// Ou en allant chercher directement la clé :
echo $_COOKIE["plusieursValeurs"]["adresse"];
echo "<br>";
