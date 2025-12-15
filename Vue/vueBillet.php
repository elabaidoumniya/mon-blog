<?php 
$titre = "Mon Blog - " . $billet['titre']; 
ob_start(); 
?>

<article>
    <header>
        <h1 class="titreBillet"><?= $billet['titre'] ?></h1>
        <time><?= $billet['date'] ?></time>
    </header>
    <p><?= nl2br(htmlspecialchars($billet['contenu'])) ?></p>
</article>

<hr />

<header>
    <h1 id="titreReponses">Réponses à <?= $billet['titre'] ?></h1>
</header>

<?php foreach ($commentaires as $commentaire): ?>
    <div class="commentaire">
        <p><strong><?= htmlspecialchars($commentaire['auteur']) ?></strong> dit :</p>
        <p><?= nl2br(htmlspecialchars($commentaire['contenu'])) ?></p>
        <small>Le <?= $commentaire['date'] ?></small>
    </div>
    <hr />
<?php endforeach; ?>

<?php 
$contenu = ob_get_clean(); 
require 'Vue/gabarit.php'; 
?>