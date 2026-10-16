FROM php:8.2-apache

# Cài đặt các thư viện hệ thống cần thiết cho Filament & Laravel
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libzip-dev \
    libicu-dev \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install pdo pdo_mysql zip intl bcmath gd opcache

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Bật mod_rewrite của Apache
RUN a2enmod rewrite

# Cấu hình DocumentRoot trỏ vào thư mục public của Laravel
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

WORKDIR /var/www/html
COPY . .

# Chạy cài đặt các gói thư viện Laravel (thêm cờ bỏ qua kiểm tra phụ thuộc hệ thống)
RUN composer install --no-dev --optimize-autoloader --no-interaction --ignore-platform-reqs

# Phân quyền thư mục ghi cho Laravel
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

EXPOSE 80
CMD ["apache2-foreground"]
