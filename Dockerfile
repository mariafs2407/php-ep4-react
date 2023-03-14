FROM php:8.2-apache AS builder

RUN docker-php-ext-install mysqli

COPY /src /var/www/html

EXPOSE $PORT

RUN echo "ServerName" $RAILWAY_STATIC_URL >> /etc/apache2/apache2.conf