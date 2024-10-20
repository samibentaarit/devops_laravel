FROM php:8.1-fpm-alpine

# Install dependencies
RUN apk --no-cache add \
    curl \
    libpng-dev \
    libjpeg-turbo-dev \
    freetype-dev \
    oniguruma-dev \
    libxml2-dev \
    zip \
    unzip \
    bash \
    mysql-client \
    git \
    nodejs \
    npm

# Install PHP extensions
RUN docker-php-ext-configure gd --with-freetype --with-jpeg && \
    docker-php-ext-install pdo pdo_mysql mbstring exif pcntl bcmath gd

# Set working directory
WORKDIR /var/www

# Copy Laravel project files
COPY . .

# Install Composer and Laravel dependencies
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer install --no-dev --prefer-dist

# Set file permissions
RUN chown -R www-data:www-data /var/www

# Expose port 9000 (for PHP-FPM)
EXPOSE 9000

CMD ["php-fpm"]
