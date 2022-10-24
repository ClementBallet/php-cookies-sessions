<?php
// On récupère la session :
session_start();

// On affiche la variable de session créée dans l'autre fichier :
echo $_SESSION["insertionValeur"] . " mais nous sommes actuellement sur " . $_SERVER["SCRIPT_NAME"];

// Test d'incrémentation d'un nombre dans la session
$_SESSION["nombre"]++;
var_dump($_SESSION);

echo "<a href='sessions3.php'>Aller vers la fin de la session...</a>";