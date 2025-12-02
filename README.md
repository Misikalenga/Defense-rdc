# Projet Defense RDC

Ce document décrit les étapes pour cloner, installer et lancer le projet Defense RDC en utilisant l'environnement de développement Docker fourni par Laravel Sail.

## Prérequis

Avant de commencer, assurez-vous d'avoir les outils suivants installés sur votre machine :

- Git
- Docker & Docker Compose
- Composer
- Node.js & npm

## Installation et Lancement

Suivez ces étapes pour mettre en place et démarrer le projet.

**1. Clonage du projet**

Clonez le dépôt Git du projet sur votre machine locale et naviguez dans le nouveau répertoire :

```bash
git clone https://github.com/votre-utilisateur/defense-rdc.git
cd Defense-rdc
```
*(Remplacez l'URL par l'URL réelle du dépôt si différente.)*

**2. Configuration de l'environnement**

Copiez le fichier d'environnement d'exemple. La configuration par défaut est conçue pour fonctionner avec Laravel Sail.

```bash
cp .env.example .env
```

**3. Installation des dépendances PHP**

Utilisez une image Docker temporaire de Composer pour installer les dépendances PHP sans avoir besoin de PHP ou Composer sur votre machine locale. Cela garantit que les dépendances correspondent à l'environnement du conteneur.

```bash
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd)":/var/www/html \
    -w /var/www/html \
    laravelsail/php83-composer:latest \
    composer install --ignore-platform-reqs
```

**4. Démarrage des conteneurs Docker**

Lancez les conteneurs de l'application avec le script Sail. L'option `-d` démarre les conteneurs en arrière-plan (mode détaché).

```bash
./vendor/bin/sail up -d
```

**5. Génération de la clé d'application**

Une fois les conteneurs lancés, générez la clé de sécurité unique pour l'application Laravel.

```bash
./vendor/bin/sail artisan key:generate
```

**6. Installation des dépendances JavaScript**

Installez les dépendances front-end définies dans `package.json`.

```bash
./vendor/bin/sail npm install
```

**7. Exécution des migrations de la base de données**

Créez les tables dans la base de données en exécutant les migrations Laravel.

```bash
./vendor/bin/sail artisan migrate
```

**8. Compilation des assets (pour le développement)**

Lancez le serveur de développement Vite pour la compilation des assets CSS et JS à la volée.

```bash
./vendor/bin/sail npm run dev
```

---

## Accès à l'application

Une fois toutes les étapes terminées et les conteneurs en cours d'exécution, votre application devrait être accessible à l'adresse suivante :

[**http://localhost**](http://localhost)

## Gérer les conteneurs

Pour arrêter les conteneurs Docker de l'application :

```bash
./vendor/bin/sail down
```