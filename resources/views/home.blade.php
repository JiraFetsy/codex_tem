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
                <ul class="main-menu">
                    <li>
                        <a href="#">Menu 1) Accueil</a>
                        <ul class="sub-menu">
                            <li><a href="{{ route('historique-scoutisme') }}">Historique et but du scoutisme</a></li>
                            <li><a href="#">Historique TEM</a></li>
                            <li><a href="#">Historique Analamanga</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Menu 2) Cartographie</a>
                        <ul class="sub-menu">
                            <li><a href="#">Délimitation + fizarana par faritra</a></li>
                            <li><a href="#">Lisitry ny fivondronana</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Menu 3) Ekipa</a>
                        <ul class="sub-menu">
                            <li><a href="#">Organigramme faritany (+contact tsirairay)</a></li>
                            <li><a href="#">Lisitra taripanofanana a jour</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Menu 4) FAFI</a>
                        <ul class="sub-menu">
                            <li><a href="#">Lisitra cible</a></li>
                            <li><a href="#">Lisitra mp nanao fangatahana andraikitra</a></li>
                            <li><a href="#">Lisitra beazina nandoa fafi</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Menu 5) Angom-boky</a>
                        <ul class="sub-menu">
                            <li><a href="#">Bokim-panabeazana</a></li>
                            <li><a href="#">Boky fiofanana</a></li>
                        </ul>
                    </li>
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
