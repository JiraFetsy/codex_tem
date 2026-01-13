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
                @if (session('status'))
                    <p class="status">{{ session('status') }}</p>
                @endif
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

        <section class="form-section">
            <div class="form-card">
                <h2>Rechercher un membre</h2>
                <div class="field">
                    <label for="search">Tapez un nom, prénom, adresse ou numéro</label>
                    <input id="search" name="search" type="text" onkeyup="searchMembres(this.value)" autocomplete="off">
                </div>
                <div id="search-results" class="search-results" aria-live="polite"></div>
            </div>
        </section>

        <section class="form-section">
            <div class="form-card">
                <h2>Ajouter un membre</h2>
                <form method="POST" action="{{ route('membres.store') }}">
                    @csrf
                    <div class="field">
                        <label for="nom">Nom</label>
                        <input id="nom" name="nom" type="text" value="{{ old('nom') }}" required>
                    </div>
                    <div class="field">
                        <label for="prenom">Prénom</label>
                        <input id="prenom" name="prenom" type="text" value="{{ old('prenom') }}" required>
                    </div>
                    <div class="field">
                        <label for="adresse">Adresse</label>
                        <input id="adresse" name="adresse" type="text" value="{{ old('adresse') }}" required>
                    </div>
                    <div class="field">
                        <label for="numero">Numéro</label>
                        <input id="numero" name="numero" type="text" value="{{ old('numero') }}" required>
                    </div>
                    <button class="primary" type="submit">Enregistrer</button>
                </form>
            </div>
        </section>
    </div>
    <script>
        let searchTimeout;
        const searchResults = document.getElementById('search-results');

        function renderResults(results) {
            if (!results.length) {
                searchResults.innerHTML = '<p class="search-empty">Aucun membre trouvé.</p>';
                return;
            }

            const items = results.map((membre) => `
                <div class="search-item">
                    <div class="search-name">${membre.nom} ${membre.prenom}</div>
                    <div class="search-meta">${membre.adresse} · ${membre.numero}</div>
                </div>
            `);

            searchResults.innerHTML = items.join('');
        }

        function searchMembres(value) {
            clearTimeout(searchTimeout);
            const query = value.trim();

            if (!query) {
                searchResults.innerHTML = '';
                return;
            }

            searchTimeout = setTimeout(() => {
                fetch(`{{ route('membres.search') }}?q=${encodeURIComponent(query)}`)
                    .then((response) => response.json())
                    .then((data) => renderResults(data))
                    .catch(() => {
                        searchResults.innerHTML = '<p class="search-empty">Erreur de recherche.</p>';
                    });
            }, 200);
        }
    </script>
</body>
</html>
