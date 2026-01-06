<?php
// Tout en haut de index.php - LIGNE 1
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

require 'Controleur/Routeur.php';

$routeur = new Routeur();
$routeur->routerRequete();