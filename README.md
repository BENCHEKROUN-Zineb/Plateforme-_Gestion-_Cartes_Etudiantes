# Plateforme de Gestion des Cartes Étudiantes

Ce projet est une application PHP permettant de gérer la création, l’importation et l’impression des cartes étudiantes. La plateforme facilite le traitement des données Excel, l’importation des photos, la recherche rapide ainsi que la génération finale des cartes.

---

## 🚀 Fonctionnalités principales

La plateforme offre un ensemble de fonctionnalités complètes permettant d’automatiser la gestion et la production des cartes étudiantes :

* **Importation des données étudiantes** via un fichier Excel (.xlsx /.csv)

  * Informations personnelles
  * Code Apogée
* **Importation des photos** par téléversement d’un **fichier ZIP**

  * Décompression automatique
  * Association des photos basée sur le nom du fichier (`code_apogee.jpg`)
* **Génération d’un QR Code unique** pour chaque étudiant

  * Inclus directement sur la carte
  * Permet le **marquage de présence** lors des examens
  * Utilisable pour l’appel et l’identification rapide
* **Recherche instantanée** par nom, prénom ou code Apogée
* **Aperçu de la carte étudiante** avant téléchargement
* **Export en PDF ou image** pour impression
* Interface ergonomique et simple à utiliser

---

## 🧩 Technologies utilisées

Le projet repose sur un ensemble de technologies fiables et adaptées à la manipulation de données et à la génération de documents :

* **PHP** — langage principal de la plateforme
* **MySQL** — stockage des informations étudiantes
* **HTML / CSS / Bootstrap** — structure et mise en forme de l’interface
* **JavaScript** — interactions dynamiques (recherche, retours instantanés)
* **Bibliothèque QR Code** — création des QR codes uniques

---

## ▶️ Installation & exécution

### 1️⃣ Cloner le projet

```
git clone https://github.com/BENCHEKROUN-Zineb/Plateforme-de-Gestion-des-Cartes-etudiantes.git
```

### 3️⃣ Configurer la base de données

* Créer une base de données MySQL (images)
* Importer le fichier `database.sql`

### 4️⃣ Configurer la connexion MySQL

Dans `connexion.php` :

```
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'images';
```

### 5️⃣ Démarrer le projet

Ouvrir le dossier dans un serveur local (XAMPP, WAMP, Laragon) puis accéder à :

```
http://localhost/nom-du-projet/
```

---

## 📦 Import des photos (format ZIP)

L’utilisateur doit fournir un **dossier compressé (.zip)** contenant toutes les photos.

Chaque photo doit être nommée sous le format :

```
code_apogee.jpg
```

Par exemple :

```
A12345.jpg
A98765.png
```

> La plateforme décompresse automatiquement le fichier ZIP, vérifie les fichiers et associe chaque photo à l’étudiant correspondant.

---

## 📄 Licence

Licence MIT.

---

## ✨ Auteur

Projet réalisé par **BENCHEKROUN Zineb** dans le cadre d’un projet académique.
