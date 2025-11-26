<?php
$titre = '💻 Oumniya Dev Blog - Génie Logiciel';
ob_start();
?>

<!-- Banner Section -->
<section id="banner">
    <div class="content">
        <header>
            <h1>🚀 Bienvenue sur mon blog</h1>
            <p>Partage mon parcours en développement web et génie logiciel</p>
        </header>
        <p>
            Je partage ici mes découvertes, mes projets et mon apprentissage en programmation. 
            Du PHP au JavaScript, en passant par les architectures modernes et les bonnes pratiques 
            de développement logiciel.
        </p>
        <ul class="actions">
            <li><a href="#articles" class="button big">Découvrir mes articles</a></li>
        </ul>
    </div>
    <span class="image object">
    <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80" 
         alt="Développement web et programmation" 
         style="width: 100%; height: auto;" />
</span>
</section>


<!-- Articles Section -->
<section id="articles">
    <header class="major">
        <h2>📝 Mes Derniers Articles</h2>
        <p>Retrouvez tous mes écrits sur le développement et les technologies</p>
    </header>
    
    <div class="posts">
        <?php foreach ($billets as $billet): ?>
        <article>
            <header>
                <h3><?= htmlspecialchars($billet['titre']) ?></h3>
                <p class="meta">
                    <i class="icon solid fa-calendar"></i> 
                    Publié le <?= date('d/m/Y à H:i', strtotime($billet['date'])) ?>
                </p>
            </header>
            <p><?= nl2br(htmlspecialchars($billet['contenu'])) ?></p>
            <ul class="actions">
                <li>
                    <a href="billet.php?id=<?= $billet['id'] ?>" class="button">
                        Lire la suite
                    </a>
                </li>
            </ul>
        </article>
        <?php endforeach; ?>
        
        <?php if (empty($billets)): ?>
        <article>
            <header>
                <h3>Aucun article pour le moment</h3>
            </header>
            <p>Les articles seront bientôt disponibles. Revenez plus tard !</p>
        </article>
        <?php endif; ?>
    </div>
</section>

<?php
$contenu = ob_get_clean();
require 'gabarit.php';
?>