FROM composer

WORKDIR /src

COPY composer.json composer.json

RUN composer install \
    --no-interaction \
    --no-plugins \
    --no-scripts \
    --no-dev \
    --prefer-dist

COPY . .
