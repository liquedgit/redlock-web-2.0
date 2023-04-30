FROM php:8.1-apache 

COPY index.php /var/www/html/index.php

RUN chown -R www-data:www-data /var/www/html && \
    chmod -R u+r,g+r,o-rwx /var/www/html

EXPOSE 80
CMD ["apache2-foreground"]