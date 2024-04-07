FROM php:8.0.26-fpm-alpine

RUN apk add --no-cache \
    libjpeg-turbo \
    libpng \
    libwebp-dev \
    freetype-dev \
    libjpeg-turbo-dev \
    libpng-dev \
    libzip-dev \
    curl \
    bash \
    icu-dev \
    && docker-php-ext-configure gd \
        --enable-gd \
        --with-freetype=/usr/include/ \
        --with-jpeg=/usr/include/ \
        --with-webp=/usr/include/ \
    && docker-php-ext-install pdo pdo_mysql pcntl zip bcmath gd exif intl \
    && rm -rf /tmp/*

RUN curl -s https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

CMD ["php-fpm"]
