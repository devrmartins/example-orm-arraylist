FROM php:7.2-apache

RUN apt-get update \
    && apt-get install -y vim git zlib1g-dev mysql-client libzip-dev libldap2-dev \
    && docker-php-ext-configure ldap --with-libdir=lib/x86_64-linux-gnu/ \
    && docker-php-ext-install ldap \
    && docker-php-ext-install zip mysqli pdo_mysql mbstring \
    && a2enmod rewrite \
    && sed -i 's!/var/www/html!/var/www/public!g' /etc/apache2/sites-available/000-default.conf \
    && mv /var/www/html /var/www/public \
    && curl -sS https://getcomposer.org/installer \
    | php -- --install-dir=/usr/local/bin --filename=composer \
    && echo "AllowEncodedSlashes On" >> /etc/apache2/apache2.conf