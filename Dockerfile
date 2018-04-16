FROM php:7.2.3
RUN apt-get update -y && apt-get install -y openssl zip unzip git libpq-dev
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN docker-php-ext-install pdo pdo_mysql mbstring exif
COPY . /Portfolio/
WORKDIR /Portfolio
RUN composer install --optimize-autoloader
RUN php artisan config:cache

CMD php artisan serve --host=0.0.0.0 --port=9004
EXPOSE 9004
