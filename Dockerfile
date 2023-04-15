FROM php:8.1-fpm-alpine

RUN apk update && \
    apk add --no-cache \
        nginx \
        supervisor \
        openssl \
        freetype \
        libpng \
        libjpeg-turbo \
        freetype-dev \
        libpng-dev \
        libjpeg-turbo-dev \
        icu-dev \
        oniguruma-dev \
        curl-dev \
        libzip-dev \
        postgresql-dev \
        autoconf \
        gcc \
        g++ \
        make \
    && docker-php-ext-install pdo_mysql pdo_pgsql mbstring zip exif pcntl gd intl opcache \
    && pecl install xdebug \
    && docker-php-ext-enable xdebug

RUN rm -rf /etc/nginx/conf.d/*
COPY nginx.conf /etc/nginx/conf.d/
COPY supervisord.conf /etc/supervisor/conf.d/

WORKDIR /var/www/html
COPY . /var/www/html

RUN chown -R www-data:www-data /var/www/html && \
    chmod -R 755 /var/www/html/storage && \
    chmod -R 755 /var/www/html/bootstrap/cache

EXPOSE 80

CMD ["/usr/bin/supervisord", "-n", "-c", "/etc/supervisor/supervisord.conf"]
