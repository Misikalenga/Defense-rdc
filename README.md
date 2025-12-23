

# Projet Defense RDC

Ce document décrit **la procédure correcte et fiable** pour cloner, installer et lancer le projet **Defense RDC** en local, en utilisant **Laravel Sail (Docker)**.

> ⚠️ **Important**
> Ce projet utilise **PHP 8.4**, **Laravel 12** et **MySQL via Docker**.
> Une installation partielle ou dans le mauvais ordre **ne fonctionnera pas**.

---

## 🧩 Prérequis

Avant de commencer, assurez-vous d’avoir installé **uniquement** :

* Git
* Docker + Docker Compose (Docker Desktop sous Windows / macOS)
* **Aucun PHP local requis**
* **Aucun Composer local requis**
* **Node.js requis uniquement pour le front (Vite)**

---

## 🚀 Installation complète (ordre strict)

### 1️⃣ Clonage du projet

```bash
git clone https://github.com/votre-utilisateur/defense-rdc.git
cd Defense-rdc
```

---

### 2️⃣ Création du fichier `.env` (OBLIGATOIRE)

```bash
cp .env.example .env
```

⚠️ **Ne jamais réutiliser un ancien `.env`**
Le fichier `.env` est ignoré par Git et peut contenir d’anciennes valeurs incompatibles.

---

### 3️⃣ Configuration du `.env` (local Docker)

Ouvrez le fichier `.env` et vérifiez **impérativement** les valeurs suivantes :

```env
APP_ENV=local
APP_DEBUG=true
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=defense_rdc
DB_USERNAME=sail
DB_PASSWORD=password

# IMPORTANT : forcer MySQL en TCP (Docker)
DB_SOCKET=null
```

👉 **Cette ligne est indispensable** pour éviter les erreurs MySQL via socket :

```env
DB_SOCKET=null
```

---

### 4️⃣ Installation des dépendances PHP (bootstrap initial)

> ⚠️ Cette étape est nécessaire **uniquement si le dossier `vendor/` n’existe pas**
> Elle installe Laravel Sail et rend la commande `./vendor/bin/sail` disponible.

```bash
docker run --rm \
  -u "$(id -u):$(id -g)" \
  -e COMPOSER_HOME=/var/www/html/.composer \
  -v "$(pwd)":/var/www/html \
  -w /var/www/html \
  laravelsail/php84-composer:latest \
  composer install
```

---

### 5️⃣ Démarrage de l’environnement Docker (Sail)

```bash
./vendor/bin/sail up -d
```

⏳ **Attendre 10–20 secondes** après cette commande
(MySQL met un peu de temps à être prêt lors du premier démarrage)

---

### 6️⃣ Génération de la clé Laravel

```bash
./vendor/bin/sail artisan key:generate
```

---

### 7️⃣ Installation des dépendances JavaScript

```bash
./vendor/bin/sail npm install
```

---

### 8️⃣ Création de la base de données (migrations)

```bash
./vendor/bin/sail artisan migrate
```

👉 Si cette commande échoue après un changement de configuration DB :

```bash
./vendor/bin/sail down -v
./vendor/bin/sail up -d
./vendor/bin/sail artisan migrate
```

---

### 9️⃣ Lancement du serveur front (Vite)

```bash
./vendor/bin/sail npm run dev
```

---

## 🌐 Accès à l’application

Une fois tous les conteneurs démarrés :

👉 **[http://localhost](http://localhost)**

---

## 🧠 Commandes utiles

### Vérifier PHP

```bash
./vendor/bin/sail php -v
```

### Vérifier Laravel

```bash
./vendor/bin/sail artisan --version
```

### Accéder à MySQL

```bash
./vendor/bin/sail mysql -h mysql -u sail -ppassword
```

---

## 🛑 Arrêter l’environnement

```bash
./vendor/bin/sail down
```

⚠️ Pour **réinitialiser complètement la base de données locale** :

```bash
./vendor/bin/sail down -v
```

---

## 🧨 Problèmes fréquents (IMPORTANT)

### ❌ `Connection refused` MySQL

➡️ Vérifier que :

* `DB_HOST=mysql`
* `DB_SOCKET=null`
* MySQL a eu le temps de démarrer (attendre 10–20 s)

---

### ❌ `Access denied for user 'sail'`

➡️ La base locale est incohérente :

```bash
./vendor/bin/sail down -v
./vendor/bin/sail up -d
```

---

### ❌ `./vendor/bin/sail: No such file`

➡️ Les dépendances PHP ne sont pas installées
➡️ Refaire l’étape **4**

---

## ✅ En résumé

* ✔️ PHP **8.4** obligatoire
* ✔️ Laravel Sail uniquement (pas de PHP local)
* ✔️ `.env` propre et local
* ✔️ `DB_SOCKET=null` indispensable
* ✔️ Respect strict de l’ordre des étapes

