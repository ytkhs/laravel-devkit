FROM php:7.4-fpm-alpine

SHELL ["/bin/ash", "-oeux", "pipefail", "-c"]

ARG TZ

# composer
ENV COMPOSER_ALLOW_SUPERUSER 1
ENV COMPOSER_HOME /composer

RUN apk update && \
  apk add --update --no-cache --virtual=.build-dependencies \
    autoconf=~2.69 \
    gcc=~9.2 \
    g++=~9.2 \
    make=~4.2 \
    tzdata=2020a-r0 \
    git=~2.24 && \
  apk add --update --no-cache \
    icu-dev=~64.2 \
    libzip-dev=~1.5 \
    oniguruma-dev=~6.9 && \
  cp /usr/share/zoneinfo/Asia/Tokyo /etc/localtime && \
  echo ${TZ} > /etc/timezone && \
  git clone https://github.com/phpredis/phpredis.git /usr/src/php/ext/redis && \
  apk del .build-dependencies && \
  docker-php-ext-install intl pdo_mysql mbstring zip bcmath redis && \
  curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer && \
  composer config -g process-timeout 3600 && \
  composer global require hirak/prestissimo