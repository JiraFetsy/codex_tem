<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fiche membre</title>
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
                    <li><a href="{{ route('historique-scoutisme') }}">Retour à la recherche</a></li>
                </ul>
            </nav>
        </header>

        <section class="hero">
            <div class="hero-text">
                <h1>Fiche de {{ $membre->nom }} {{ $membre->prenom }}</h1>
                <p>Retrouvez les informations enregistrées pour ce membre.</p>
            </div>
            <div class="menu-card">
                <h2>Informations</h2>
                <ul>
                    <li><span>👤</span> Nom : {{ $membre->nom }}</li>
                    <li><span>🧾</span> Prénom : {{ $membre->prenom }}</li>
                    <li><span>📍</span> Adresse : {{ $membre->adresse }}</li>
                    <li><span>📞</span> Numéro : {{ $membre->numero }}</li>
                </ul>
            </div>
        </section>
    </div>
</body>
</html>
