# Gunakan image resmi PHP dan Apache
FROM php:8.2-apache

# Install dependencies
RUN apt-get update && apt-get install -y \
    git unzip zip curl libzip-dev \
    && docker-php-ext-install zip pdo pdo_mysql

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Salin semua file Laravel ke direktori kerja container
COPY . /var/www/html/

# Set working directory
WORKDIR /var/www/html

# Install dependency Laravel
RUN composer install --no-dev --optimize-autoloader

# Set permission
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html/storage

# Enable mod_rewrite
RUN a2enmod rewrite

# Expose port
EXPOSE 80
