FROM php:apache

# Install extensions
RUN docker-php-ext-install pdo pdo_mysql

# Copy Apache configuration
COPY 000-default.conf /etc/apache2/sites-available/000-default.conf

# Copy application
COPY . /var/www/html

# Set ServerName globally
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Initialize database
COPY init.sql /docker-entrypoint-initdb.d/

# Set environment variables
ENV MYSQLHOST=db
ENV MYSQLPORT=3307
ENV MYSQLDATABASE=evenements
ENV MYSQL_ROOT_PASSWORD=root

# Expose port
EXPOSE 8080
