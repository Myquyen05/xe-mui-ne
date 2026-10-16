FROM php:8.2-apache

# Cài đặt extension cần thiết cho Laravel
RUN docker-php-ext-install pdo pdo_mysql

# Bật mod_rewrite của Apache
RUN a2enmod rewrite

# Trỏ DocumentRoot của Apache vào thư mục public của Laravel
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Sao chép toàn bộ code vào container
COPY . /var/www/html

# Cấp quyền ghi cho thư mục lưu trữ của Laravel
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

EXPOSE 80
CMD ["apache2-foreground"]
