# Use official PHP image
FROM php:8.2-apache

# Copy all project files to Apache server folder
COPY . /var/www/html/

# Expose port
EXPOSE 10000

# Start Apache server
CMD ["apache2-foreground"]
