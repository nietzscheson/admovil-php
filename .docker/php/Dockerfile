FROM php:7.1-cli-alpine

RUN apk add --no-cache $PHPIZE_DEPS \
	libxml2-dev \
	php-soap \
	git \
        && docker-php-ext-install soap \
     	&& pecl install xdebug \
	&& docker-php-ext-enable xdebug

COPY --from=composer:1.7.2 /usr/bin/composer /usr/bin/composer

RUN composer global require hirak/prestissimo
