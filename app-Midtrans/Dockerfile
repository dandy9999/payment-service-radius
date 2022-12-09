FROM php:8-apache-buster

COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

RUN apt-get update -y

RUN apt-get install -y \
        libzip-dev \
        zip \
  && docker-php-ext-install zip

WORKDIR /var/www/html

COPY . .

RUN composer install

RUN ls -lha

EXPOSE 80

CMD ["apache2-foreground"]