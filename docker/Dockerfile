# Dockerfile
FROM dunglas/frankenphp:latest-php8.3-alpine

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

#PHP extensions
RUN apk add --no-cache linux-headers
RUN docker-php-ext-install pdo pdo_mysql sockets pcntl exif bcmath