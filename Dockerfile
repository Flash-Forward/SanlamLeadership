FROM php:7.4-apache

LABEL maintainer="Flash-Forward. <kyleh@flash-forward.co.za>" \
      version="0.01"

COPY --chown=www-data:www-data . /srv/welink

COPY .docker/vhost.conf /etc/apache2/sites-available/000-default.conf 

WORKDIR /srv/welink

RUN docker-php-ext-install pdo pdo_mysql \ 
    && a2enmod rewrite negotiation \
    && docker-php-ext-install opcache
