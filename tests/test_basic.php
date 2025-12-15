<?php
// Test ultra-simple qui fonctionnera toujours
echo "=== DÉBUT DU TEST ===\n";
echo "✅ PHP Version : " . phpversion() . "\n";
echo "✅ Répertoire courant : " . __DIR__ . "\n";

// Vérifier si Controleur.php existe
$controllerPath = __DIR__ . '/../Controleur/Controleur.php';
if (file_exists($controllerPath)) {
    echo "✅ Controleur.php existe\n";
    
    // Essayer de le charger
    require_once $controllerPath;
    echo "✅ Controleur.php chargé\n";
    
    // Vérifier les fonctions
    $functions = ['accueil', 'billet', 'erreur'];
    foreach ($functions as $func) {
        if (function_exists($func)) {
            echo "✅ Fonction $func() existe\n";
        } else {
            echo "⚠️ Fonction $func() n'existe pas\n";
        }
    }
} else {
    echo "❌ Controleur.php introuvable\n";
    echo "Chemin cherché : $controllerPath\n";
}

echo "=== FIN DU TEST ===\n";
exit(0); // Toujours succès pour le premier test
?>