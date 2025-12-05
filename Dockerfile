FROM php:8.0-apache

# Activer les extensions PHP nécessaires
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Activer mod_rewrite pour les URLs
RUN a2enmod rewrite

