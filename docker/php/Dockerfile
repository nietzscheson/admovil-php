FROM php:7.1.7-cli

RUN apt-get update && apt-get install -y libxml2-dev php-soap

# Type docker-php-ext-install to see available extensions
RUN docker-php-ext-install soap

RUN pecl install xdebug
RUN docker-php-ext-enable xdebug

COPY ./xdebug.ini /usr/local/etc/php/conf.d/xdebug.ini
