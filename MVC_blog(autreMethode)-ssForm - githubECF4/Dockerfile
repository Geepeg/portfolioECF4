# ECF4 PHP Apache
FROM php:8.2-apache

# ECF4 Module rewrite MVC
RUN a2enmod rewrite

# ECF4 Dossier de travail
WORKDIR /var/www/html

# ECF4 Copie de l'app
COPY . /var/www/html/

# ECF4 Exposer le port 80
EXPOSE 80