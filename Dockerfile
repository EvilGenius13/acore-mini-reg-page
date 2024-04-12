FROM php:7.4-apache
RUN apt-get update && \
    apt-get install -y libonig-dev zlib1g-dev libpng-dev libjpeg-dev libfreetype6-dev libgmp-dev && \
    docker-php-ext-configure gd --with-freetype --with-jpeg && \
    docker-php-ext-install pdo pdo_mysql mbstring gd gmp
COPY . /var/www/html/
