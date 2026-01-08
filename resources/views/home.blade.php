<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="page">
        <header>
            <div class="logo">
                <span>LC</span>
                Laravel Club
            </div>
            <nav>
                <ul>
                    <li><a href="#">Accueil</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Portfolio</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>
        </header>

        <section class="hero">
            <div class="hero-text">
                <h1>Bienvenue sur votre première page Laravel</h1>
                <p>
                    Un menu élégant, une mise en page lumineuse et un point de départ
                    idéal pour personnaliser votre application.
                </p>
                <div class="hero-actions">
                    <a class="primary" href="#">Découvrir</a>
                    <a class="secondary" href="#">Voir les offres</a>
                </div>
            </div>
            <div class="menu-card">
                <h2>Menu rapide</h2>
                <ul>
                    <li><span>✨</span> Dernières nouveautés</li>
                    <li><span>🚀</span> Lancer un projet</li>
                    <li><span>📊</span> Tableau de bord</li>
                    <li><span>💬</span> Support &amp; FAQ</li>
                </ul>
            </div>
        </section>
    </div>
</body>
</html>
