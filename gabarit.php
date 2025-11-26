<!DOCTYPE HTML>
<html lang="fr">
<head>
    <title><?= $titre ?? 'Mon Blog Dev' ?></title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <meta name="description" content="Blog de développement web et génie logiciel - Partages techniques et parcours d'apprentissage" />
    <meta name="keywords" content="développement web, PHP, JavaScript, programmation, génie logiciel" />
    <link rel="stylesheet" href="assets/css/main.css" />
</head>
<body class="is-preload">

    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Main -->
        <div id="main">
            <div class="inner">

                <!-- Header -->
                <header id="header">
                    <a href="index.php" class="logo">
                        <strong>💻 Oumniya Dev Blog</strong> - Student Engineer
                    </a>
                    <ul class="icons">
                        <li><a href="#" class="icon brands fa-twitter" title="Twitter">
                            <span class="label">Twitter</span>
                        </a></li>
                        <li><a href="#" class="icon brands fa-github" title="GitHub">
                            <span class="label">GitHub</span>
                        </a></li>
                        <li><a href="#" class="icon brands fa-linkedin" title="LinkedIn">
                            <span class="label">LinkedIn</span>
                        </a></li>
                    
                    </ul>
                </header>

                <!-- Contenu Dynamique -->
                <?= $contenu ?? '<p>Contenu non disponible</p>' ?>

            </div>
        </div>

        <!-- Sidebar -->
        <div id="sidebar">
            <div class="inner">

                <!-- Search -->
                <section id="search" class="alt">
                    <form method="post" action="#">
                        <input type="text" name="query" id="query" placeholder="Rechercher un article..." />
                    </form>
                </section>

                <!-- Menu -->
                <nav id="menu">
                    <header class="major">
                    </header>
                    <ul>
                        <li><a href="index.php">🏠 Accueil</a></li>
                        <li><a href="apropos.php">👤 À propos de moi</a></li>
                        <li>
                            <span class="opener">🎯 Catégories</span>
                            <ul>
                                <li><a href="#">🐘 PHP & Backend</a></li>
                                <li><a href="#">⚡ JavaScript</a></li>
                                <li><a href="#">🎨 Frontend & CSS</a></li>
                                <li><a href="#">🏗️ Architecture</a></li>
                                <li><a href="#">🚀 Projets Perso</a></li>
                            </ul>
                        </li>
                        <li><a href="projets.php">💻 Mes Projets</a></li>
                        <li><a href="contact.php">📧 Contact</a></li>
                    </ul>
                </nav>

                <!-- Section Articles Récents -->
                <section>
                    <header class="major">
                        <h2>📖 Articles Récents</h2>
                    </header>
                    <div class="mini-posts">
                        <article>
                            <h4>Débuter avec PHP</h4>
                            <p>Mes premiers pas dans la programmation backend.</p>
                            <a href="#" class="button small">Lire</a>
                        </article>
                        <article>
                            <h4>Comprendre MVC</h4>
                            <p>L'architecture qui change tout.</p>
                            <a href="#" class="button small">Lire</a>
                        </article>
                    </div>
                    <ul class="actions">
                        <li><a href="#" class="button">Tous les articles</a></li>
                    </ul>
                </section>

                <!-- Section Contact -->
                <section>
                    <header class="major">
                        <h2>📞 Me contacter</h2>
                    </header>
                    <p>
                        Passionnée par le développement et l'architecture logicielle, 
                        je partage ici mon parcours d'apprentissage. N'hésitez pas à 
                        me contacter pour échanger !
                    </p>
                    <ul class="contact">
                        <li class="icon solid fa-envelope">
                            <a href="mailto:contact@oumniya.dev">oumniyaelabaid@gmail.com</a>
                        </li>
                        <li class="icon solid fa-phone">+120 604503916</li>
                        <li class="icon solid fa-home">
                            Maroc<br />
                            Maroc, Tanger
                        </li>
                    </ul>
                </section>

                <!-- Footer -->
                <footer id="footer">
                    <p class="copyright">
                        &copy; 2024 Oumniya Dev Blog. Tous droits réservés.<br />
                        Design: <a href="https://html5up.net">HTML5 UP</a>.
                    </p>
                </footer>

            </div>
        </div>

    </div>

    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>

</body>
</html>