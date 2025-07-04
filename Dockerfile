FROM php:8.3-cli

# Install dependencies
RUN apt-get update && apt-get install -y \
    unzip \
    git \
    curl \
    libzip-dev \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    libonig-dev \
    libmcrypt-dev \
    && docker-php-ext-install pdo pdo_mysql mbstring zip exif pcntl

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /app

# Copy project
COPY . .

# Install dependencies
RUN composer install --optimize-autoloader --no-dev \
    && php artisan config:cache \
    && php artisan route:cache \
    && php artisan view:cache \
    && php artisan storage:link

# Expose port and run Laravel on correct path
EXPOSE 8080

CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8080", "--public"]
