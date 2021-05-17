FROM php:8.0-apache

COPY index.php participantes.php /var/www/html/

EXPOSE 80

CMD ["apache2-foreground"]
