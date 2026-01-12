<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historique et but du scoutisme</title>
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
                <ul class="main-menu">
                    <li><a href="{{ url('/') }}">Retour à l'accueil</a></li>
                </ul>
            </nav>
        </header>

        <section class="hero">
            <div class="hero-text">
                <h1>Historique et but du scoutisme</h1>
                <p>
                    Cette page est prête à accueillir le contenu sur l'historique du scoutisme
                    et ses objectifs. Ajoutez vos textes, images et ressources ici.
                </p>
                <div class="hero-actions">
                    <a class="primary" href="{{ url('/') }}">Revenir à l'accueil</a>
                    <a class="secondary" href="#">Ajouter du contenu</a>
                </div>
            </div>
            <div class="menu-card">
                <h2>À venir</h2>
                <ul>
                    <li><span>📚</span> Chronologie</li>
                    <li><span>🎯</span> Valeurs &amp; mission</li>
                    <li><span>🗺️</span> Références locales</li>
                </ul>
            </div>
        </section>
    </div>
</body>
</html>
