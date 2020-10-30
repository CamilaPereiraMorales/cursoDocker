FROM php:latest

RUN apt-get update && apt-get install -y libmcrypt-dev \
    libzip-dev \
            zip \
    default-mysql-client libmagickwand-dev --no-install-recommends

RUN pecl install imagick-beta
RUN docker-php-ext-install pdo_mysql
RUN docker-php-ext-install zip
RUN docker-php-ext-enable imagick

WORKDIR /app  
