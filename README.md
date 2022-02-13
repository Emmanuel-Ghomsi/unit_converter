# Convertisseur de devises

Projet PHP pour la convertion des devises

## Avant de commencer

### Switcher vers votre branche

- Remplacer ```<branch>``` par le nom de votre branche
```bash
git checkout -b <branch>
```

## Installation

- Installation des dépendances PHP et configuration minimale

```bash
composer install
cp .env.example .env
php artisan key:generate
```

- Les migrations

    - Créer la base de donnée ```unit_converter```
    - rajouter les lignes suivantes dans le .env (avec vos identifiants de connexion à MySQL)

        ```.env
        DB_DATABASE=unit_converter
        DB_USERNAME=<username>
        DB_PASSWORD=<password>
        ```

- Lancer l'artisan commande de migration et peupler la base de données

```php
php artisan migrate --seed
```

- Lancer le serveur interne

```php
php artisan serve
```
