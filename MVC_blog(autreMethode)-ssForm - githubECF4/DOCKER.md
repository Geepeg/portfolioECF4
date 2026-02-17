# Dockerisation de l'app

# Prérequis
- Docker Desktop installé et démarré
- Utilisation de GitBash pour exécuter les commandes
- Compte Docker Hub

# Structure
Ces fichiers permettent l'exécution de l'application dans un conteneur Docker.
- Ajout de Dockerfile (Permet de construire l'image Docker)
- Ajout de docker-compose.yml (Permet de lancer le conteneur)

# Voici les commandes utilisées.
- Construction de l'image :
docker build -t portfolio-ecf4 .
- Exécution du conteneur :
docker run -p 8080:80 portfolio-ecf4
- Utilisation de docker-compose
docker-compose up --build
- Publication sur Docker Hub
docker login
docker tag portfolio-ecf4 geepeg/portfolio-ecf4:latest
docker push geepeg/portfolio-ecf4:latest
