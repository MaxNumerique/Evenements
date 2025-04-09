FROM php:apache

# Install extensions
RUN docker-php-ext-install pdo pdo_mysql

# Copy application
COPY . /var/www/html