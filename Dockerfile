FROM php:8-apache
# Update and download needed packages
RUN apt-get update && \
    apt-get upgrade -y && \
    apt-get install -y git

# php-zip is needed to install monolog
RUN apt-get install zip unzip php-zip

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /var/www/html

COPY composer.json composer.lock ./
RUN composer install --no-scripts --no-autoloader