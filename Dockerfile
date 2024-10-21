FROM webdevops/php-apache:8.2

# Set working directory to /app
WORKDIR /app

# Copy Laravel project files to the container
COPY . .

# Install dependencies
RUN composer install --no-dev --optimize-autoloader

# Set proper permissions
RUN chown -R application:application /app/storage /app/bootstrap/cache

# Expose the Apache port
EXPOSE 80