------------------------------
# ECF4 - Portfolio
------------------------------

# OBJECTIF

Clonage du Repository :

- Cloner le repository GitHub suivant : https://github.com/olivierCEFII/portfolio.git
- Créer une branche nommée "page-contact" pour vos modifications.

Modification du Code :

- Ajouter une nouvelle fonctionnalité, l'ajout d'une page contact avec contenu personnalisé dans l'application.
- Documenter vos modifications dans un fichier README ou un autre document pertinent.
- Commentez votre code.

Commit et Push :

- Ajouter les fichiers modifiés au suivi de Git.
- Committer les modifications avec un message descriptif.
- Pousser les modifications vers le repository distant.

Dockerisation :

- Créer un fichier Dockerfile pour dockeriser l'application.
- Construire l'image Docker et tester l'application dans un conteneur localement.
- Préparer un fichier docker-compose.yml si nécessaire pour la gestion des services.
- Déposer votre image sur votre repository de Docker-Hub.
- Commentez vos lignes de paramètres Docker.

Documentation :

- Écrire une documentation sur le processus de Dockerisation, y compris les étapes pour construire et exécuter les conteneurs pour le déploiement.

------------------------------

# MODIFICATIONS DU PROJET

# Page contact

- Ajout du controller "ContactController.php"
- Ajout de la vue "contact/index.php"
- Ajout d'un lien dans la nav
- Ajout de commentaires dans le code

# Corrections des erreurs aprés lancement du projet en local

- Correction des erreurs dans HomeController (Ajout de l'entitié Creation)
- Correction des erreurs dans Core/Router.php (Changement de 'home' en 'Home')

# Dockerisation

- Ajout de Dockerfile à la racine
- Ajout de docker-compose.yml à la racine

# Documentation

- Création de DOCKER.md pour documenter la dockerisation

# OUTILS

- Github
- GitBash
- Docker.desktop

------------------------------

# COMMANDES UTILISEES

# Git

- git clone 'url'
- git checkout -b page-contact
- git status
- git add .
- git commit -m "Ajout page contact"
- git remote -v
- git remote set-url origin 'url'
- git push -u origin page-contact

# Lancement en local avec GitBash

- cd public
- php -S localhost:8000
  (http://localhost:8000/index.php)

# Dockerisation

- docker build -t portfolio-ecf4 .
- docker run -p 8080:80 portfolio-ecf4
- docker-compose up --build

# Docker Hub

- docker login
- docker tag portfolio-ecf4 geepeg/portfolio-ecf4:latest
- docker push geepeg/portfolio-ecf4:latest
