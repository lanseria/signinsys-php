FROM php:5.6-apache
WORKDIR /var/www/html
RUN docker-php-ext-install pdo pdo_mysql
EXPOSE 80
CMD apache2-foreground
