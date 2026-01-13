<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lisitra cible</title>
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
                <h1>Lisitra cible</h1>
                <p>Retrouvez ici la liste complète des membres enregistrés.</p>
            </div>
            <div class="menu-card">
                <h2>Résumé</h2>
                <ul>
                    <li><span>👥</span> Total membres : {{ $membres->count() }}</li>
                    <li><span>📌</span> Page dédiée aux listes</li>
                </ul>
            </div>
        </section>

        <section class="form-section">
            <div class="form-card">
                <h2>Liste des membres</h2>
                @if ($membres->isEmpty())
                    <p class="search-empty">Aucun membre enregistré pour le moment.</p>
                @else
                    <div class="table-wrapper">
                        <table class="members-table">
                            <thead>
                                <tr>
                                    <th>Nom</th>
                                    <th>Prénom</th>
                                    <th>Adresse</th>
                                    <th>Numéro</th>
                                    <th>Fiche</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($membres as $membre)
                                    <tr>
                                        <td>{{ $membre->nom }}</td>
                                        <td>{{ $membre->prenom }}</td>
                                        <td>{{ $membre->adresse }}</td>
                                        <td>{{ $membre->numero }}</td>
                                        <td>
                                            <a class="search-action" href="{{ route('membres.show', $membre->id) }}">
                                                <span aria-hidden="true">👁️</span> Voir
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            </div>
        </section>
    </div>
</body>
</html>
