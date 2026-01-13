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
                @if (session('status'))
                    <p class="status">{{ session('status') }}</p>
                @endif
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

        <section class="form-section">
            <div class="form-card">
                <h2>Modifier les informations</h2>
                <form method="POST" action="{{ route('membres.update', $membre->id) }}">
                    @csrf
                    @method('PATCH')
                    <div class="field">
                        <label for="nom">Nom</label>
                        <input id="nom" name="nom" type="text" value="{{ old('nom', $membre->nom) }}" required>
                    </div>
                    <div class="field">
                        <label for="prenom">Prénom</label>
                        <input id="prenom" name="prenom" type="text" value="{{ old('prenom', $membre->prenom) }}" required>
                    </div>
                    <div class="field">
                        <label for="adresse">Adresse</label>
                        <input id="adresse" name="adresse" type="text" value="{{ old('adresse', $membre->adresse) }}" required>
                    </div>
                    <div class="field">
                        <label for="numero">Numéro</label>
                        <input id="numero" name="numero" type="text" value="{{ old('numero', $membre->numero) }}" required>
                    </div>
                    <button class="primary" type="submit">Modifier</button>
                </form>
            </div>
        </section>
    </div>
</body>
</html>
