# Croquis du projet (Laravel + MySQL)

## Objectif
Mettre en place un projet Laravel utilisant MySQL comme base de données, avec une structure claire des dossiers, des conventions de configuration et un plan de démarrage.

## Structure proposée
```
.
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   └── Requests/
│   ├── Models/
│   └── Providers/
├── bootstrap/
├── config/
│   ├── app.php
│   ├── database.php
│   └── ...
├── database/
│   ├── factories/
│   ├── migrations/
│   └── seeders/
├── public/
├── resources/
│   ├── views/
│   └── ...
├── routes/
│   ├── web.php
│   └── api.php
├── storage/
├── tests/
├── .env
└── artisan
```

## Configuration MySQL (exemple `.env`)
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=codex_tem
DB_USERNAME=laravel
DB_PASSWORD=secret
```

## Configuration `config/database.php`
- Utiliser le driver `mysql`.
- Vérifier que les variables d’environnement sont chargées.

## Étapes d’initialisation
1. Installer Laravel :
   ```bash
   composer create-project laravel/laravel .
   ```
2. Configurer la base MySQL (fichier `.env`).
3. Créer les migrations nécessaires dans `database/migrations`.
4. Exécuter les migrations :
   ```bash
   php artisan migrate
   ```
5. Lancer le serveur local :
   ```bash
   php artisan serve
   ```

## Entités de base (exemple)
- **User** (Laravel par défaut).
- **Projet** (table `projects`) : nom, description, dates.
- **Tâche** (table `tasks`) : titre, statut, projet_id.

## Relations possibles
- Un **Projet** possède plusieurs **Tâches** (one-to-many).
- Un **Utilisateur** peut être assigné à plusieurs **Tâches** (many-to-many).

## Bonnes pratiques
- Utiliser les Form Requests pour valider les données.
- Centraliser la logique métier dans des services dédiés si besoin.
- Protéger les variables sensibles dans `.env`.
