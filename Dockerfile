FROM php:8.2-apache AS builder

RUN docker-php-ext-install mysqli

COPY . /var/www/html

EXPOSE 80

RUN echo "ServerName" $RAILWAY_STATIC_URL:80 >> /etc/apache2/apache2.conf