# Use official PHP image
FROM php:8.2-apache

# Install mysqli extension
RUN docker-php-ext-install mysqli

# Copy project files
COPY . /var/www/html/

# Expose port
EXPOSE 10000

# Start Apache server
CMD ["apache2-foreground"]
