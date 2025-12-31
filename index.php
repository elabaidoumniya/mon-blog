<?php
// Tout en haut de index.php - LIGNE 1
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

require('Controleur/Controleur.php');

try {
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'billet') {
            if (isset($_GET['id'])) {
                $idBillet = intval($_GET['id']);
                if ($idBillet != 0)
                    billet($idBillet);
                else
                    throw new Exception("Identifiant de billet non valide");
            } else {
                throw new Exception("Identifiant de billet non défini");
            }
        } else {
            throw new Exception("Action non valide");
        }
    } else {
        accueil(); // action par défaut
    }
} catch (Exception $e) {
    erreur($e->getMessage());
}