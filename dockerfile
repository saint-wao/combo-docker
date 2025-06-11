FROM php:8.2-apache

# Install PDO MySQL
RUN docker-php-ext-install pdo pdo_mysql

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Set working directory
WORKDIR /var/www/html

# Copy all files
COPY . .

# Ensure storage & cache directories exist and have correct permissions
RUN mkdir -p storage \
    bootstrap/cache && \
    chown -R www-data:www-data /var/www/html && \
    chmod -R 755 storage bootstrap/cache

# Expose port 80
EXPOSE 80
