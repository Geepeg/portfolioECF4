# PHP Apache
FROM php:8.2-apache

# Module rewrite MVC
RUN a2enmod rewrite

# Dossier de travail
WORKDIR /var/www/html

# Copie de l'app
COPY . /var/www/html/

# Exposer le port 80
EXPOSE 80