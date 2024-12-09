FROM php:8.1-fpm-alpine

LABEL maintainer="HoangThong <phamhoangthongxyz@gmail.com>"

ARG DEBIAN_FRONTEND=noninteractive

# Install required libraries using apk
RUN apk update && apk add --no-cache \
    openssl \
    git \
    curl \
    vim \
    nano \
    net-tools \
    zip \
    unzip \
    libzip-dev \
    icu-dev \
    oniguruma-dev \
    g++ \
    make \
    curl-dev \
    openssl-dev \
    pkgconf \
    libpng-dev \
    libjpeg-turbo-dev \
    freetype-dev \
    mariadb-client

# Install base PHP extensions
RUN docker-php-ext-install \
    bcmath \
    mbstring \
    intl \
    opcache \
    pdo \
    pdo_mysql \
    mysqli \
    exif \
    pcntl

# Install and configure GD extension
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd

RUN mkdir -p /var/www/html
