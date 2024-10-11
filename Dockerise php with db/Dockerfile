# Use the official PHP image
FROM php:8.1-apache

# Install required PHP extensions
RUN docker-php-ext-install mysqli

# Copy source files to the container
COPY ./ /var/www/html/

# Expose port 80 to make the web server accessible
EXPOSE 80
