<?php
$this->titre = 'Erreur - Mon Blog';
?>

<div class="error-container">
    <h1>🚧 Oups ! Une erreur est survenue</h1>
    <div class="alert alert-error">
        <p><strong>Détails de l'erreur :</strong></p>
        <p><?= htmlspecialchars($msgErreur) ?></p>
    </div>
    <p>Notre équipe technique a été informée. Veuillez réessayer plus tard.</p>
    <a href="index.php" class="button">Retour à l'accueil</a>
</div>