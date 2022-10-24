<?php
// Fin de la session
session_unset();
session_destroy();

// Si on débug la superglobale $_SESSION, elle devrait renvoyer NULL et est non connue par PHP
var_dump($_SESSION);