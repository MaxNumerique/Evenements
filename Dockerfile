FROM php:8.1-apache

# Install extensions
RUN docker-php-ext-install pdo pdo_mysql

# Enable Apache rewrite module
RUN a2enmod rewrite

# Copy application
COPY . /var/www/html/

# Set permissions
RUN chown -R www-data:www-data /var/www/html/
RUN chmod -R 755 /var/www/html/

# Remove the environment variables from Dockerfile as they'll be set by Railway
# and copy .env variables won't work for actual deployment

# Expose port
EXPOSE 80
CMD ["apache2-foreground"]