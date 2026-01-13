<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mpiandraikitra</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="page">
        <header>
            <div class="logo">
                <span>SAHI</span>
                MPIANDRAIKITRA
            </div>
            <nav>
                <ul class="main-menu">
                    <li><a href="{{ url('/') }}">Retour à l'accueil</a></li>
                </ul>
            </nav>
        </header>
        <section class="hero">
            <div class="hero-text">
                @if (session('status'))
                    <p class="status">{{ session('status') }}</p>
                @endif
            </div>
        </section>

        <!--section class="form-section">
            <div class="form-card">
                <h2>Ajouter un mpiandraikitra</h2>
                <form method="POST" action="{{ route('membres.store') }}">
                    @csrf
                    <div class="field">
                        <input id="nom" name="nom" type="text" value="{{ old('nom') }}" placeholder="Nom" required>
                    </div>
                    <div class="field">
                        <input id="prenom" name="prenom" type="text" value="{{ old('prenom') }}" placeholder="Prénom" required>
                    </div>
                    <div class="field">
                        <input id="adresse" name="adresse" type="text" value="{{ old('adresse') }}" placeholder="Adresse" required>
                    </div>
                    <div class="field">
                        <label for="numero"></label>
                        <input id="numero" name="numero" type="text" value="{{ old('numero') }}" placeholder="Numéro" required>
                    </div>
                    <button class="primary ajout-membre" type="submit">Enregistrer</button>
                </form>
            </div>
        </section!-->
        <section class="form-section">
            <div class="form-card">
                <h2>Rechercher mpiandraikitra</h2>
                <div class="field">
                    <label for="search">Tapez un nom, prénom, adresse ou numéro</label>
                    <input id="search" name="search" type="text" onkeyup="searchMembres(this.value)" autocomplete="off">
                </div>
                <div id="search-results" class="search-results" data-show-url="{{ url('/membres') }}" aria-live="polite"></div>
            </div>
        </section>

    </div>
    <script>
        let searchTimeout;
        const searchResults = document.getElementById('search-results');
        const showBaseUrl = searchResults.dataset.showUrl;

        function renderResults(results) {
            if (!results.length) {
                searchResults.innerHTML = '<p class="search-empty">Aucun membre trouvé.</p>';
                return;
            }

            const items = results.map((membre) => `
                <div class="search-item">
                    <div class="search-name">${membre.nom} ${membre.prenom}</div>
                    <div class="search-meta">${membre.adresse} · ${membre.numero}</div>
                    <a class="search-action" href="${showBaseUrl}/${membre.id}" aria-label="Voir la fiche de ${membre.nom} ${membre.prenom}">
                        <span aria-hidden="true">👁️</span> Voir
                    </a>
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
